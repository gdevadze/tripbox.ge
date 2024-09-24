<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBlogStoreRequest;
use App\Http\Requests\AdminBlogUpdateRequest;
use App\Models\Blog;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Services\GpsService;
use ImageIntervention;

class AdminCarController extends Controller
{
    public function index()
    {
        return view('admin.pages.cars.index');
    }

    public function getCarsForAjax(): JsonResponse
    {
        if(currentUser()->hasRole('მენეჯერი')){
            // $cars = Car::query()->whereHas('user', function($q){
            //     return $q->whereIn('city_id',[1,3]);
            // })->latest();
            $cars = Car::query()->with('brand','brand_model','user')->latest();
        }else{
            $cars = Car::query()->with('brand','brand_model','user')->latest();
        }
        return Datatables()->of($cars)
            ->addIndexColumn()
            ->addColumn('car_number', function ($data) {
                return $data->vehicle_number;
            })
            ->addColumn('formatted_user', function ($data) {
                return $data->user->full_name;
            })
            ->addColumn('formatted_poster', function ($data) {
                return '<img style="width:100px" src="'.$data->get_poster.'"> <br>'.$data->brand->name.' '.$data->brand_model->name.' '.$data->year;
            })
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';
                // if (currentUser()->can('blog-edit')) {
                    $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.cars.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
                    $html .= $btn . ' <a class="btn btn-outline-primary shadow btn-xs sharp mr-1 set-gps" href="javascript:void(0)" data-id='.$data->id.'><i class="fa fa-map-marker"></i></a>';
                // }
                // if (currentUser()->can('blog-delete')) {
                   $html .= $btn . ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deleteCar(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
                // }


                return $html;
            })
            ->rawColumns(['order_detail_info', 'action','formatted_user','formatted_poster'])
            ->make(true);
    }

    public function create(): View
    {
        return view('admin.pages.orders.create');
    }

    public function edit($id): View
    {
        $car = Car::findOrFail($id);
        return view('admin.pages.cars.edit',compact('car'));
    }

    public function show($id): View
    {
        $order = Order::findOrFail($id);
        return view('admin.pages.orders.show',compact('order'));
    }
    
    public function setGps(Request $request,GpsService $gpsService): JsonResponse
    {
        $car = Car::findOrFail($request->id);
        $gpsCars = $gpsService->cars();
        return jsonResponse(['status' => 0,'html' => view('admin.general.cars.show_gps',compact('car','gpsCars'))->render()]);
    }
    
    public function setGpsCarId(Request $request){
        Car::findOrFail($request->car_id)->update(['gps_car_id' => $request->id]);
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $data = $request->except('upload');
        $car = Car::findOrFail($id);
        $fileName = $car->img;
        $path = public_path('storage/images/cars/');
        if ($request->upload){
            $image = \request()->file('upload');
            $name = '/car-image-' . Str::random(10).'-'.time() . '.'.$image->extension();
            $img = ImageIntervention::make('' . $image . '');
            $img->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $img->insert('https://tripbox.ge/assets/images/tripbox_watermark.png', 'center');

            $img->save($path . '/' . $name);
            $fileName = $name;
            // $car->images()->create(['url' => $name,'folder' => $folderName]);
        }
        $car->update(array_merge($data,['img' => $fileName]));
        return redirect(route('admin.cars.index'))->with('success','ავტომობილი წარმატებით განახლდა!');
    }

    public function deleteCar(Request $request){
        Car::findOrFail($request->id)->delete();
        return jsonResponse(['status' => 1]);
    }
}
