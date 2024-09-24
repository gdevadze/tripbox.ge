<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Car;
use App\Models\AdditionalService;
use App\Models\City;
use App\Models\Trip;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\GpsService;
use App\Services\GoogleMapService;
use Auth;

class CoreController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::all();
        $cars = Car::query()->whereNotNull('price_1');
        $categories = Category::all();
        $brands = Brand::has('cars')->get();
        if($request->category_ids){
            $cars = $cars->whereIn('category_id',$request->category_ids);
        }
        if($request->brand_ids){
            $cars = $cars->whereIn('brand_id',$request->brand_ids);
        }
        if($request->deposit == 'yes'){
            $cars = $cars->whereNotNull('deposit');
        }
        if($request->deposit == 'no'){
            $cars = $cars->whereNull('deposit');
        }
        $startDate = Carbon::today()->format('Y-m-d');
        $endDate = Carbon::today()->addDays(1)->format('Y-m-d');
        if($request->date_from){
            $date = explode(' - ',$request->date_from);
            $startDate = $date[0];
            $endDate = $date[1];
        }
        
        $diffDays = (Carbon::parse($startDate)->diffInDays($endDate) <= 1) ? 1 : Carbon::parse($startDate)->diffInDays($endDate);
        // return $diffDays;
        $cars = $cars->whereDoesntHave('orders', function ($query) use ($startDate, $endDate) {
                $query->where(function ($query) use ($startDate, $endDate) {
                    $query->where('is_deleted',0)->where('date_from', '<=', $endDate)
                        ->where('date_to', '>=', $startDate);
                });
            });
        $locationFrom = 'Tbilisi';
        $locationTo = 'Tbilisi';
        $sortField = 'price_1';
        $direction = 'asc';
        if ($request->sort_by) {
            switch($request->sort_by) {
                case 'price_asc':
                    $sortField = 'price_1';
                    $direction = 'asc';
                    break;
                case 'price_desc':
                    $sortField = 'price_1';
                    $direction = 'desc';
                    break;
                default:
                    $sortField = 'price_1';
                    $direction = 'asc';
            }
        }
        
        $cars = $cars->orderBy($sortField,$direction);
        $cars = $cars->paginate(12);
        // $dateFrom = urlencode($startDate.' - '.$endDate);
        return view('website.pages.index',compact('cities','cars','categories','brands','diffDays','startDate','endDate','locationFrom','locationTo'));
    }

    public function getModels(Request $request)
    {
        $models = BrandModel::where('brand_id',$request->select)->get();
        return $models;
    }

    public function getTrips()
    {
        $trips = Trip::where('user_id',currentUser()->id)->get();
        return jsonResponse(['status' => 0,'html' => view('website.general.get_trips',compact('trips'))->render()]);
    }

    public function becomePartner(){
        $cities = City::all();
        return view('website.pages.partner',compact('cities'));
    }

    public function discoverGeorgia(Request $request){
        $locations = [];
        if($request->location_to){
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.content.tripadvisor.com/api/v1/location/search?key=20A5BA198F714ED2BBC2F46CB1A9B598&searchQuery='.urlencode($request->location_to).'&category='.urlencode($request->category).'&language=en',
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
        }
        
        return view('website.pages.discover',compact('locations'));
    }
    
    public function carDetailRender(Request $request,GpsService $gpsService,GoogleMapService $googleMapService){
        $additionalServices = AdditionalService::all();
        $car = Car::findOrFail($request->id);
        // return $car;
        $diffDays = $request->diff_days;
        $cityFrom = $request->city_from;
        $cityTo = $request->city_to;
        if(!$cityFrom && !$cityTo){
            return jsonResponse(['status' => 0,'html' => view('website.general.main_car_detail',compact('additionalServices','car','diffDays'))->render()]);
        }
        if($car->gps_car_id){
            $coordinates = $gpsService->car($car->gps_car_id);
            $lat = $coordinates['carStatus']['lat'];
            $lon = $coordinates['carStatus']['lon'];
        }else{
            $coordinates = $googleMapService->geocodeAddress($car->address);
            $lat = $coordinates['latitude'];
            $lon = $coordinates['longitude'];
        }
        
        
        $location = $googleMapService->geocodeAddress($cityFrom);
        $locationTo = $googleMapService->geocodeAddress($cityTo);

        
        if(Auth::check()){
            $view = view('website.general.car_detail',compact('car','diffDays','cityFrom','cityTo','lat','lon','location','locationTo','additionalServices'))->render();
        }else{
            $view = view('website.general.not_registered',compact('car','diffDays','cityFrom','cityTo','lat','lon','location','locationTo','additionalServices'))->render();
        }
        return jsonResponse(['status' => 0,'html' => $view]);
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::has('cars')->get();
        
        $cars = Car::query();
        // if ($request->category_ids){
        //     $cars = $cars->where('category_id',$request->category_ids);
        // }
        if ($request->category_ids){
            $cars = $cars->whereIn('category_id',$request->category_ids);
        }
        if ($request->brand_ids){
            $cars = $cars->whereIn('brand_id',$request->brand_ids);
        }
        
        if ($request->city){
            $cars = $cars->where('address', 'like', '%'.$request->city.'%');
        }
        if($request->deposit == 'yes'){
            $cars = $cars->whereNotNull('deposit');
        }
        if($request->deposit == 'no'){
            $cars = $cars->whereNull('deposit');
        }
        $date = explode(' - ',$request->date_from);
        $startDate = $date[0];
        $endDate = $date[1];
        $diffDays = (Carbon::parse($date[0])->diffInDays($date[1]) <= 1) ? 1 : Carbon::parse($date[0])->diffInDays($date[1]);
        // (Carbon::parse($startDate)->diffInDays($endDate) <= 1) ? 1 : Carbon::parse($startDate)->diffInDays($endDate)
        $cars = $cars->whereDoesntHave('orders', function ($query) use ($startDate, $endDate) {
                $query->where(function ($query) use ($startDate, $endDate) {
                    $query->where('is_deleted',0)->where('date_from', '<=', $endDate)
                        ->where('date_to', '>=', $startDate);
                });
            });
        if($diffDays == 1){
            $cars = $cars->whereNotNull('price_1')->whereDoesntHave('orders', function ($query) use ($startDate, $endDate) {
                        $query->where(function ($query) use ($startDate, $endDate) {
                            $query->where('date_from', '<=', $endDate)
                                ->where('date_to', '>=', $startDate);
                        });
                    });
        }
        $sortField = 'price';
        if($diffDays == 1){
            $sortField = 'price_1';
        }
        
        $direction = 'asc';
        if ($request->sort_by) {
            switch($request->sort_by) {
                case 'price_asc':
                    $direction = 'asc';
                    break;
                case 'price_desc':
                    $direction = 'desc';
                    break;
                default:
                    $direction = 'asc';
            }
        }
        
        $cars = $cars->orderBy($sortField,$direction);
        
        $cars = $cars->paginate(12);
        $cities = City::all();
        
        
        
        return view('website.pages.search',compact('cities','cars','diffDays','categories','brands','date'));
    }

    public function locationDetail($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.content.tripadvisor.com/api/v1/location/'.$id.'/details?key=20A5BA198F714ED2BBC2F46CB1A9B598&language=en&currency=USD',
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
        $location = json_decode($response,true);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.content.tripadvisor.com/api/v1/location/'.$id.'/photos?key=20A5BA198F714ED2BBC2F46CB1A9B598&language=en',
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
        $locationImages = json_decode($response,true)['data'];
//        return $location;
        return view('website.pages.location_detail',compact('location','locationImages'));

    }
}
