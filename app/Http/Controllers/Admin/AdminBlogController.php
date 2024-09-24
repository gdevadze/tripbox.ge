<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBlogStoreRequest;
use App\Http\Requests\AdminBlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminBlogController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.blogs.index');
    }

    public function getBlogsForAjax(): JsonResponse
    {
        return Datatables()->of(Blog::query()->latest())
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';
                // if (currentUser()->can('blog-edit')) {
                    $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.blogs.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
                // }
                // if (currentUser()->can('blog-delete')) {
                    $html .= $btn . ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deleteBlog(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
                // }


                return $html;
            })
            ->rawColumns(['role', 'action'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.blogs.create');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
//        return $blog;
        return view('admin.pages.blogs.edit',compact('blog'));
    }

    public function store(AdminBlogStoreRequest $request)
    {
        $data = $request->validated();
        $imageName = time().'.'.$data['image']->extension();
        $request->image->move(public_path('blogs_img'), $imageName);
        Blog::create(array_merge($data,['img' => $imageName]));
        return redirect(route('admin.blogs.index'))->with('success','სიახლე წარმატებით დაემატა!');
    }

    public function update(AdminBlogUpdateRequest $request,$id)
    {
        $data = $request->validated();
        $blog = Blog::findOrFail($id);
        $imageName = $blog->img;
        if ($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('blogs_img'), $imageName);
        }
        $blog->update(array_merge($data,['img' => $imageName]));
        return redirect(route('admin.blogs.index'))->with('success','სიახლე წარმატებით განახლდა!');
    }

    public function deleteBlog(Request $request)
    {
        try {
            Blog::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }
}
