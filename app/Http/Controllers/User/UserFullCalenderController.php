<?php
  
namespace App\Http\Controllers\User;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
  
class UserFullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $cars = Car::where('user_id',currentUser()->id)->get();
        if($request->ajax()) {
            if(currentUser()->user_type == 1){
                $data = Order::with('car')->where('is_paid',1)->where('user_id',currentUser()->id)->get(['car.id','id', 'location_from_id', 'date_from', 'date_to']);
            }else{
                $cars = Car::where('user_id',currentUser()->id)->get();
                $data = Order::with('car')->where('is_paid',1)->whereIn('car_id',$cars->pluck('id')->all())->get();
            }

             return response()->json($data);
        }
  
        return view('user.pages.calendar',compact('cars'));
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request): JsonResponse
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }

    public function carPause(Request $request){
        $date = explode(' - ',$request->date_from);
        $order = Order::create([
            'type' => 2,
            'user_id' => currentUser()->id,
            'car_id' => $request->id,
            'date_from' => Carbon::parse($date[0])->format('Y-m-d H:i'),
            'date_to' => Carbon::parse($date[1])->format('Y-m-d H:i'),
            'location_from_id' => 0,
            'location_to_id' => 0,
            'price' => 0,
            'delivery_price' => 0,
            'refund_price' => 0,
            'total_price' => 0,
            'payable_price' => 0,
            'location_from_distance' => 0,
            'location_to_distance' => 0,
            'is_paid' => 1,
        ]);
        return redirect()->back();
    }
}