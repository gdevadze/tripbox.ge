<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Car;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Image;
use App\Enums\FuelType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use ImageIntervention;
use Illuminate\Support\Facades\File;
use App\Services\GpsService;
use Illuminate\Http\JsonResponse;

class UserCarController extends Controller
{
    public function index(): View
    {
        $cars = Car::where('user_id',currentUser()->id)->latest()->get();
        return view('user.pages.cars.index',compact('cars'));
    }

    public function create(): View
    {
        $brandsa = Brand::all();
        $colors = Color::all();
        $categories = Category::all();
        $cities = City::all();
        $fuelTypes = FuelType::all();
        return view('user.pages.cars.create',compact('brandsa','colors','categories','cities','fuelTypes'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $data = $request->except('image','sortable','upload');
        $data['user_id'] = currentUser()->id;
        $car = Car::create($data);
        $path = public_path('storage/images/cars');
        
        $folderName = 'car-'.$car->id . '-' . Str::random(5);
        $path = public_path('storage/images/cars/'.$folderName);
        File::makeDirectory($path);
        $sortable = explode(',',$request->sortable);

        foreach($sortable as $sort){
            if(isset(\request()->file('upload')[$sort])){
                $image = \request()->file('upload')[$sort];
                $name = '/car-image-' . Str::random(10).'-'.time() . '.'.$image->extension();
                $img = ImageIntervention::make('' . $image . '');
                $img->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                /* insert watermark at bottom-right corner with 10px offset */
                $img->insert('https://tripbox.ge/assets/images/tripbox_watermark.png', 'center');

                //                    $filePath = '/image-' . Str::random(10) . '.'.$image->extension();
                $img->save($path . '/' . $name);

                $car->images()->create(['url' => $name,'folder' => $folderName]);
            }
        }
        return redirect()->to(route('user.cars.index'))->with('success','Car Added Successfully');
    }
    
    public function edit($id){
        $car = Car::findOrFail($id);
        $brandsa = Brand::all();
        $brandModels = BrandModel::where('brand_id',$car->brand_id)->get();
        $colors = Color::all();
        $categories = Category::all();
        $cities = City::all();
        $fuelTypes = FuelType::all();
        return view('user.pages.cars.edit',compact('car','brandsa','brandModels','colors','categories','cities','fuelTypes'));
    }

    public function update(Request $request,$id){
        $data = $request->except('image','sortable','upload');
        $data['user_id'] = currentUser()->id;
        $car = Car::findOrFail($id);
        $path = public_path('storage/images/cars');
        
        $folderName = 'car-'.$car->id . '-' . Str::random(5);
        $path = public_path('storage/images/cars/'.$folderName);
        File::makeDirectory($path);
        $sortable = explode(',',$request->sortable);
        $car->update($data);
        if($request->upload){
            foreach($sortable as $sort){
                $imgs = Image::where('imageable_id',$id)->max('sortable_key');
                if(isset(\request()->file('upload')[$sort])){
                    $image = \request()->file('upload')[$sort];
                    $name = '/car-image-' . Str::random(10).'-'.time() . '.'.$image->extension();
                    $img = ImageIntervention::make('' . $image . '');
                    $img->resize(1000, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    /* insert watermark at bottom-right corner with 10px offset */
                    $img->insert('https://tripbox.ge/assets/images/tripbox_watermark.png', 'center');

                    //                    $filePath = '/image-' . Str::random(10) . '.'.$image->extension();
                    $img->save($path . '/' . $name);

                    $car->images()->create(['url' => $name,'folder' => $folderName,'sortable_key' => $imgs + 1]);
                }
            }
        }
        
        return redirect()->to(route('user.cars.index'))->with('success','Car Added Successfully');
    }

    public function sortableImages(Request $request){
        $ids = explode(",",$request->sortable_arr);
        $imagesArr = explode(",",$request->images_arr);
        $images = Image::whereIn('id',$imagesArr)->get();
        foreach($imagesArr as $key => $imgId){
            echo "$imgId<br>";
            Image::findOrFail($imgId)->update(['sortable_key' => $key]);
        }
    }
    
    public function myCarLocation(Request $request,GpsService $gpsService){
        if($request->id){
            $carCoordinates = $gpsService->car($request->id);
        }else{
            $carCoordinates = $gpsService->car($request->id);
        }
        
        return jsonResponse(['status' => 1,'html' => view('user.general.cars.my_car_location',compact('carCoordinates'))->render()]);
    }
    
    public function show($id){
        $car = Car::findOrFail($id);
        return view('user.pages.cars.show',compact('car'));
    }

    public function pauseCar(Request $request){
        $car = Car::findOrFail($request->id);
        $msg = '';
        if($car->is_paused == 1){
            $car->update(['is_paused' => 0]);
            $msg = 'ავტომობილზე პაუზა წარმატებით მოიხსნა!';
        }else{
            $car->update(['is_paused' => 1]);
            $msg = 'ავტომობილი წარმატებით დაპაუზდა!';
        }
        return jsonResponse(['status' => 1,'msg' => $msg]);
    }

    public function deleteCar(Request $request): JsonResponse
    {
        try{
            $car = Car::findOrFail($request->id);
            $car->delete();
            return jsonResponse(['status' => 1]);
        } catch(\Exception $ex){
            return jsonResponse(['status' => 0]);
        }
    }

    public function deleteImage(Request $request): JsonResponse
    {
        try{
            $image = Image::findOrFail($request->id);
            $image->delete();
            return jsonResponse(['status' => 1]);
        } catch(\Exception $ex){
            return jsonResponse(['status' => 0]);
        }
    }
}
