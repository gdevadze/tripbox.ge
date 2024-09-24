<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cart;
use App\Models\Order;
use App\Models\AdditionalService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $car = Car::findOrFail($request->id);
        $diffDays = Carbon::parse($request->date_from)->diffInDays($request->date_to);
        $carPrice = $car->price;
        if(Carbon::parse($request->date_from)->diffInDays($request->date_to) >= 10){
            $carPrice = $car->price_10;
        }elseif(Carbon::parse($request->date_from)->diffInDays($request->date_to) >= 5){
            $carPrice = $car->price_5_9;
        }elseif(Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) == 1){
            $carPrice = $car->price_1;
        }
        
        $price = ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100);
        $deliveryPrice = carRentalCalculation($request->location_from,$car->gps_car_id,$car->id)['delivery_cost'];
        $refundPrice = carRentalCalculation($request->location_to,$car->gps_car_id,$car->id)['delivery_cost'];
        $totalPrice = $price + $deliveryPrice + $refundPrice;
        $payablePrice = ($diffDays * $carPrice * 15 / 100);
        $discountPrice = (Auth::check() && currentUser()->orders()->where('is_paid',1)->count() == 0) ? ($diffDays * $carPrice * 15 / 100) * 30 / 100 : 0;
        $order = Order::create([
            'user_id' => currentUser()->id,
            'car_id' => $request->id,
            'date_from' => Carbon::parse($request->date_from)->format('Y-m-d H:i'),
            'date_to' => Carbon::parse($request->date_to)->format('Y-m-d H:i'),
            'location_from_id' => $request->location_from,
            'location_to_id' => $request->location_to,
            'price' => ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100),
            'delivery_price' => $deliveryPrice,
            'refund_price' => $refundPrice,
            'total_price' => $totalPrice,
            'payable_price' => $payablePrice - $discountPrice,
            'discount_price' => $discountPrice,
            'location_from_distance' => carRentalCalculation($request->location_from,$car->gps_car_id,$car->id)['distance'],
            'location_to_distance' => carRentalCalculation($request->location_to,$car->gps_car_id,$car->id)['distance'],
            'address' => $request->address,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'country' => $request->country,
            'tel' => $request->tel,
            'wishes' => $request->wishes
        ]);
        if($request->additional_services){
            for($i=0;$i<count($request->additional_services); $i++){
                $additionalService = AdditionalService::findOrFail($request->additional_services[$i]);
                $totalPrice = $additionalService->price;
                if($additionalService->type == 1){
                    $totalPrice = $additionalService->price * $diffDays;
                }
                $order->order_additional_services()->create(['additional_service_id' => $request->additional_services[$i],'price' => $totalPrice]);
            }
            
        }
        $type = 1;
        if(!Auth::check()){
            $type = 2;
        }
        return \jsonResponse(['status' => 0,'message' => 'Successfully added to cart','id' => $order->id,'price' => $order->payable_price,'type' => $type]);
    }

    public function cart()
    {
        $user_id    = auth()->user()->id??null;
        $s_id       = session()->get('session_id');
        $carts = Cart::where('session_id', $s_id)
            ->whereNotNull('model_type')
            ->orderBy('id', 'desc')
            ->get();
        return view('website.pages.cart', compact('carts'));
    }
}
