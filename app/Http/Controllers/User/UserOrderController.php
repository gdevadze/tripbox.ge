<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Favorite;
use App\Models\Trip;
use App\Models\TripDetail;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\GoogleMapService;
use App\Services\GpsService;
use App\Services\TbcPayService;
use PDF;
use GuzzleHttp\Client;

class UserOrderController extends Controller
{
    public function makeOrder(Request $request)
    {
        $s_id       = session()->get('session_id');
        $carts = Cart::where('session_id', $s_id)
            ->orderBy('id', 'desc')
            ->get();
        $order = Order::create(['user_id' => currentUser()->id,'price' => 0]);
        foreach ($carts as $cart) {
            $totalPrice = 0;
            if($cart->model_type && $cart->date_from && $cart->date_to){
                $totalPrice = Carbon::parse($cart->date_from)->diffInDays($cart->date_to) * $cart->model->price;
            }

            OrderDetail::create([
                'order_id' => $order->id,
                'model_type' => $cart->model_type,
                'model_id' => $cart->model_id,
                'price' => $totalPrice
            ]);
        }

        return redirect()->back();
    }

    public function orderInvoice(GoogleMapService $googleMapService,$id){
        $order = Order::findOrFail($id);
        $address1 = $order->location_from_id;
        $address2 = $order->location_to_id;
        $locationFrom = $googleMapService->geocodeAddress($address1);
        $locationTo = $googleMapService->geocodeAddress($address2);
        $pdf = PDF::loadView('general.order_invoice', compact('order','locationFrom','locationTo'),[],['title' => $order->order_number]);
    	return $pdf->stream('invoice.pdf');
    }

    public function addToFavorite(Request $request)
    {
        $request->validate([
            'car_id' => 'required',
        ]);

        $favoriteCheck = Favorite::where('car_id',$request->car_id)->where('user_id',currentUser()->id)->first();
        if($favoriteCheck){
            $favoriteCheck->delete();
            $favoriteCount = Favorite::where('user_id',currentUser()->id)->count();
            return response()->json(['status' => 1,'favorite_count' => $favoriteCount,'message' => __('deletes_favorites')]);
        }

        Favorite::create([
            'user_id' => currentUser()->id,
            'car_id' => $request->car_id
        ]);

        $favoriteCount = Favorite::where('user_id',currentUser()->id)->count();

        return response()->json(['status' => 0,'favorite_count' => $favoriteCount,'message' => __('add_favorites')]);
    }

    public function addToTrip(Request $request,GoogleMapService $googleMapService)
    {
        $request->validate([
            'location_id' => 'required',
        ]);

        $trips = Trip::where('user_id',currentUser()->id)->get();
        $locationId = $request->location_id;
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/details/json', [
            'query' => [
                'place_id' => $locationId,
                'fields' => 'name,formatted_address,geometry,rating,website,photos,reviews,place_id',
                'key' => $apiKey,
            ],
        ]);
        $placeDetails = json_decode($response->getBody()->getContents(), true);
        $location = $placeDetails['result'];
        $lat = 0;
        $lng = 0;
        $distance = 0;
        $drivingDuration = 0;
        if($request->location_from){
            $coordinates = $googleMapService->geocodeAddress($request->location_from);
            $lat = $coordinates['latitude'];
            $lng = $coordinates['longitude'];
            $latLng = $lat.', '.$lng;
            $locationTo = $location['geometry']['location']['lat'].', '.$location['geometry']['location']['lng'];
            $distance = $googleMapService->calculateDistance($latLng,$locationTo);
            $drivingDuration = $googleMapService->drivingDuration($latLng,$locationTo);
        }
        $locationFrom = $request->location_from;
        // return $location;
        return response()->json(['status' => 0,'html' => view('user.general.trips',compact('location','locationId','lat','lng','distance','drivingDuration','locationFrom'))->render()]);
    }

    public function viewTripMap(Request $request,GoogleMapService $googleMapService){
        $locationId = $request->location_id;

        $trips = Trip::where('user_id',currentUser()->id)->get();
        $locationId = $request->location_id;
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/details/json', [
            'query' => [
                'place_id' => $locationId,
                'fields' => 'name,formatted_address,geometry,rating,website,photos,reviews,place_id',
                'key' => $apiKey,
            ],
        ]);
        $placeDetails = json_decode($response->getBody()->getContents(), true);
        $location = $placeDetails['result'];
        $coordinates = $googleMapService->geocodeAddress($request->location_from);
        $lat = $coordinates['latitude'];
        $lng = $coordinates['longitude'];
        $latLng = $lat.', '.$lng;
        $locationTo = $location['geometry']['location']['lat'].', '.$location['geometry']['location']['lng'];
        $distance = $googleMapService->calculateDistance($latLng,$locationTo);
        $drivingDuration = $googleMapService->drivingDuration($latLng,$locationTo);
        return response()->json(['status' => 0,'distance' => $distance,'html' => view('user.general.view_trip_map',compact('location','lat','lng','distance','drivingDuration'))->render()]);
    }

    public function addToTripDetail(Request $request)
    {
        $request->validate([
            'location_id' => 'required',
        ]);

        $locationId = $request->location_id;
        if($request->trip_id){
            TripDetail::create([
                'trip_id' => $request->trip_id,
                'location_id' => $locationId,
                'location_name' => $request->location_name,
                'img' => $request->location_img
            ]);
        }else{
            $trip = Trip::create([
                'user_id' => currentUser()->id,
                'title' => $request->trip_title,
                'location_from' => $request->location_from,
            ]);
            $trip->trip_details()->create([
                'location_id' => $request->location_id,
                'location_name' => $request->location_name,
                'img' => $request->location_img
            ]);
        }

        return response()->json(['status' => 0]);
    }

    public function favorites(): View
    {
        $favorites = Favorite::where('user_id',currentUser()->id)->get();

        return view('website.pages.wishlist',compact('favorites'));
    }

    public function cancelOrder(Request $request){
        $order = Order::findOrFail($request->id)->update(['car_id' => null]);
        return jsonResponse(['status' => 1]);
    }

    public function payments(){
        $orders = Order::where('type',1)->where('user_id',currentUser()->id)->where('is_paid',1)->get();
        return view('user.pages.payments',compact('orders'));
    }

    public function myTrips(){
        $trips = Trip::where('user_id',currentUser()->id)->get();
        return view('user.pages.my-trips',compact('trips'));
    }

    public function orders($status = 2): View
    {
        $cars = [];
        $todayOrders = [];
        $bookedCars = 0;
        $activeCars = 0;
        if(currentUser()->user_type == 1){
            $orders = Order::where('type',1)->where('is_paid',1)->where('date_to','>',Carbon::now())->where('user_id',currentUser()->id)->get();
            if($status == 3){
                $orders = Order::where('type',1)->where('is_paid',1)->where('date_to','<',Carbon::now())->where('user_id',currentUser()->id)->get();
            }
            $todayOrders = Order::where('type',1)->where('is_paid',1)->whereDate('date_from',Carbon::today())->where('user_id',currentUser()->id)->get();
        }else{
            $cars = Car::where('user_id',currentUser()->id)->get();
            $bookedCars = Car::with('orders')->where('user_id',currentUser()->id)->whereHas('orders', function($q) {
                return $q->whereDate('date_from', '<=', Carbon::today())
                        ->whereDate('date_to', '>=', Carbon::today());
            })->count();
            $activeCars = Car::where('user_id', currentUser()->id)
                ->whereDoesntHave('orders', function($q) {
                    $q->whereDate('date_from', '<=', Carbon::today())
                    ->whereDate('date_to', '>=', Carbon::today());
                })->count();
            $orders = Order::where('type',1)->where('is_paid',1)->where('date_to','>',Carbon::now())->whereIn('car_id',$cars->pluck('id')->all())->get();
            if($status == 3){
                $orders = Order::where('type',1)->where('is_paid',1)->where('date_to','<',Carbon::now())->whereIn('car_id',$cars->pluck('id')->all())->get();
            }
            $todayOrders = Order::where('type',1)->where('is_paid',1)->whereDate('date_from',Carbon::today())->whereIn('car_id',$cars->pluck('id'))->get();
        }

        return view('user.pages.orders',compact('orders','cars','bookedCars','activeCars','todayOrders'));
    }

    public function update(Request $request,TbcPayService $tbcPayService,$id){
        $order = Order::findOrFail($id);
        $tripDetails = TripDetail::where('trip_id',$request->trip_id)->get();
        foreach($tripDetails as $tripDetail){
            $order->order_details()->create([
                'location_id' => $tripDetail->location_id
            ]);
        }
        return $tbcPayService->for($order)->setPaymentMethods([4,5,7])->setCurrency('USD')->setAmount($order->payable_price)->order();
    }

    public function orderInfo(GoogleMapService $googleMapService,$id){
        $order = Order::findOrFail($id);
        $address1 = $order->location_from_id;
        $address2 = $order->location_to_id;
        $locationFrom = $googleMapService->geocodeAddress($address1);
        $locationTo = $googleMapService->geocodeAddress($address2);
        return view('user.pages.order_info',compact('order','locationFrom','locationTo'));
    }

    public function orderDetailRender(Request $request,GoogleMapService $googleMapService){
        $order = Order::findOrFail($request->id);
        $address1 = $order->location_from_id;
        $address2 = $order->location_to_id;
        $locationFrom = $googleMapService->geocodeAddress($address1);
        $locationTo = $googleMapService->geocodeAddress($address2);
        return jsonResponse(['status' => 0,'html' => view('user.general.orders.order_detail',compact('order','locationFrom','locationTo'))->render()]);
    }

    public function orderShow(GoogleMapService $googleMapService,GpsService $gpsService,$id)
    {
        $order = Order::findOrFail($id);
        $address1 = $order->location_from_id;
        $address2 = $order->location_to_id;
        
        $locationFrom = $googleMapService->geocodeAddress($address1);
        $coordinates1 = implode(',',$locationFrom);
        $locationTo = $googleMapService->geocodeAddress($address2);
        $coordinates2 = implode(',',$locationTo);
        $distance = $googleMapService->calculateDistance($coordinates1, $coordinates2);
        $pricePerKm = 0.5;
        $lat = '';
        $lon = '';
        if($order->car->gps_car_id){
            $coordinates = $gpsService->car($order->car->gps_car_id);
            $lat = $coordinates['carStatus']['lat'];
            $lon = $coordinates['carStatus']['lon'];
            $carCorrdinatesStr = $lat.','.$lon;
        }else{
            $coordinates = $googleMapService->geocodeAddress($order->car->address);
            $lat = $coordinates['latitude'];
            $lon = $coordinates['longitude'];
            $carCorrdinatesStr = $lat.','.$lon;
        }
        $distanceCityFromAndCar = $googleMapService->calculateDistance($coordinates1,$carCorrdinatesStr,'value');
        $deliveryCost = 0;
        if($distanceCityFromAndCar > 2000){
            $deliveryCost = ($distanceCityFromAndCar * 0.001) * $pricePerKm;
        }
        $carAddress = $googleMapService->reverseGeocode($lat,$lon);
        // return $carAddress;
        $trips = Trip::where('user_id',currentUser()->id)->get();
        return view('user.pages.detailed',compact('order','distance','locationFrom','locationTo','carAddress','deliveryCost','trips'));
    }

    public function edit($id){
        $order = Order::findOrFail($id);
        $cars = Car::where('user_id',currentUser()->id)->get();
        return view('user.pages.order_edit',compact('order','cars'));
    }

    public function updateOrder(Request $request,$id){
        $order = Order::findOrFail($id)->update(['car_id' => $request->car_id]);
        // $cars = Car::where('user_id',currentUser()->id)->get();
        return redirect()->to(route('user.orders'));
    }

    public function addToOrder(Request $request)
    {
        $cart = OrderDetail::where('order_id',$request->order_id)->where('location_id',$request->id)->first();
        if($cart){
            return jsonResponse(['status' => 1,'message' => 'აღნიშნული პროდუქცია კალათაში უკვე დამატებულია']);
        }
        $order = OrderDetail::create([
            'order_id' => $request->order_id,
            'location_id' => $request->id
        ]);
        return \jsonResponse(['status' => 0,'message' => 'Successfully added to cart']);
    }
    
    public function carRentCalculation(Request $request,GoogleMapService $googleMapService,GpsService $gpsService){
        $order = Order::findOrFail($request->id);
        $address1 = $order->location_from->city_en;
        $address2 = $order->location_to->city_en;
        $deliveryCost = 0;
        $locationFrom = $googleMapService->geocodeAddress($address1);
        $coordinates1 = implode(',',$locationFrom);
        $locationTo = $googleMapService->geocodeAddress($address2);
        $coordinates2 = implode(',',$locationTo);
        $distance = $googleMapService->calculateDistance($coordinates1, $coordinates2);
        $pricePerKm = 0.5;
        $carCoordinates = $gpsService->car($order->car->gps_car_id);
        $carCorrdinatesStr = $carCoordinates['carStatus']['lat'].','.$carCoordinates['carStatus']['lon'];
        $deliveryAddress = $request->lat.','.$request->lng;
        $distanceCityFromAndCar = $googleMapService->calculateDistance($carCorrdinatesStr,$deliveryAddress,'value');
        if($distanceCityFromAndCar > 2000){
            $deliveryCost = ($distanceCityFromAndCar * 0.001) * $pricePerKm;
        }
        return jsonResponse(['distance' => $distanceCityFromAndCar,'delivery_cost' => number_format(ceil($deliveryCost),2)]);
    }
    
    public function searchLocations(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.content.tripadvisor.com/api/v1/location/search?key=20A5BA198F714ED2BBC2F46CB1A9B598&searchQuery='.urlencode($request->search_location_query).'&language=en',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $locations = json_decode($response,true)['data'];
        return jsonResponse(['status' => 1,'locations' => $locations,'html' => view('user.general.orders.locations',compact('locations'))->render()]);
    }
}
