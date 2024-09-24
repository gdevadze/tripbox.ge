<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use ImageIntervention;

class AdminProductController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.products.index');
    }

    public function getProductsForAjax(Request $request): JsonResponse
    {
        $products = Product::query()->latest();
        return Datatables()->of($products)
            ->addIndexColumn()

            ->addColumn('formatted_status', function ($data) {
                $html = 'გადაუხდელი';
                if($data->payment_status == 1){
                    $html = 'გადახდილი';
                }
                return $html;
            })
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';

                $html = $btn .= ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.products.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
                $html .= $btn = ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="changeHotOfferStatus(' . $data->id . ')"><i class="fa fa-trash"></i></a>';

                return $html;
            })
            ->rawColumns(['agent_info','formatted_status', 'action'])
            ->make(true);
    }

    public function edit($id): View
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.pages.products.edit',compact('product','categories'));
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $data = $request->except('image');

        DB::transaction(function () use ($data,$request,$id) {
            $filePath = null;

            $property = Product::findOrFail($id);
            if ($request->image){
                $image = ImageIntervention::make($request->file('image'));

                /**
                 * Main Image Upload on Folder Code
                 */
                $imageName = uniqid('product_img_') . '.jpg';
                $destinationPath = public_path('storage/images/');
                $image->resize(700, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image->save($destinationPath.'/'.$imageName);
                $filePath = 'storage/images/' . $imageName;
//                /**
//                 * Generate Thumbnail Image Upload on Folder Code
//                 */
                $destinationPathThumbnail = public_path('storage/images/thumbnail/');
                $image->resize(250,250);
                $image->save($destinationPathThumbnail.'/'.$imageName);

                $filePath = $imageName;

                /**
                 * Write Code for Image Upload Here,
                 *
                 * $upload = new Images();
                 * $upload->file = $imageName;
                 * $upload->save();
                 */




//                $file = $request->file('image');
//                $fileName = uniqid('product_img_') . '.jpg';

                // Move the file to the desired directory
//                $file->storeAs('images', $fileName, 'public');
//                $filePath = 'storage/images/' . $fileName;
            }
            $property->update(array_merge($data, ['user_id' => currentUser()->id,'img' => $filePath]));
        });
        return redirect()->back()->with('success','პროდუქტი წარმატებით განახლდა!');
    }

    public function getProperty(Request $request): JsonResponse
    {
        try {
            $property = Property::findOrFail($request->id);
            return $property;
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }

    public function showComments(Request $request): JsonResponse
    {
        $property = Property::findOrFail($request->id);
        return jsonResponse(['status' => 0,'html' => view('admin.general.properties.show_comments',compact('property'))->render()]);
    }

    public function deleteProperty(Request $request): JsonResponse
    {
        try {
            Property::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }

    public function changeHotOfferStatus(Request $request): JsonResponse
    {
        try {
            $product = Product::findOrFail($request->id);
            if($product->is_hot_offer == 0){
                $product->update(['is_hot_offer' => 1]);
            }else{
                $product->update(['is_hot_offer' => 0]);
            }

            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }

    public function updateDateProperty(Request $request){
        try {
            $endDate = Carbon::today()->addDays(30);
            Property::findOrFail($request->id)->update(['end_date' => $endDate]);
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }

    public function deleteComment(Request $request): JsonResponse
    {
        try {
            Comment::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0,'err' => $exception->getMessage()]);
        }
    }
}
