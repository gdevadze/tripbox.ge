<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBlogStoreRequest;
use App\Http\Requests\AdminBlogUpdateRequest;
use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.pages.orders.index');
    }

    public function getOrdersForAjax(): JsonResponse
    {
        return Datatables()->of(Order::query()->where('type',1)->where('is_paid',1)->latest())
            ->addIndexColumn()
            ->addColumn('car_number', function ($data) {
                if($data->car){
                    return strtoupper($data->car->vehicle_number).'<br>'.$data->car->brand->name.' '.$data->car->brand_model->name;
                }
                return '';
            })
            ->addColumn('formatted_user', function ($data) {
                if($data->user){
                    return $data->user->full_name ?? '';
                }
                return $data->name.' '.$data->surname.'<br>'.$data->tel;
            })
            ->addColumn('order_detail_info', function ($data) {
                $locationFrom = $data->location_from_id;
                $locationTo = $data->location_to_id;
                return "$locationFrom - $locationTo <br> $data->date_from - $data->date_to";
            })
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';
                // if (currentUser()->can('blog-edit')) {
                    $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.orders.show',$data->id).'"><i class="fa fa-eye"></i></a>';
                   $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.orders.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
                   $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('user.orders.invoice',$data->id).'"><i class="bx bxs-file-pdf"></i></a>';
                // }
                // if (currentUser()->can('blog-delete')) {
//                    $html .= $btn . ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deleteBlog(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
                // }


                return $html;
            })
            ->rawColumns(['order_detail_info', 'action','formatted_user','car_number'])
            ->make(true);
    }

    public function create(): View
    {
        return view('admin.pages.orders.create');
    }

    public function edit($id): View
    {
        $order = Order::findOrFail($id);
        $cars = Car::all();
        return view('admin.pages.orders.edit',compact('order','cars'));
    }

    public function show($id): View
    {
        $order = Order::findOrFail($id);
        return view('admin.pages.orders.show',compact('order'));
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $data = $request->all();
        $order = Order::findOrFail($id);
        
        $order->update($data);
        return redirect(route('admin.orders.index'))->with('success','შეკვეთა წარმატებით განახლდა!');
    }
}
