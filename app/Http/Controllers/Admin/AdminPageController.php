<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStorePartnerCompany;
use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class AdminPageController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.settings.pages.index');
    }

    public function getPartnerCompaniesAjax(): JsonResponse
    {
        return Datatables()->of(Page::query()->latest())
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';
//                if (currentUser()->can('blog-edit')) {
                    $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.settings.pages.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
//                }
                // if (currentUser()->can('partner-company-delete')) {
                    $html .= $btn . ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deletePage(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
                // }


                return $html;
            })
            ->rawColumns(['role', 'action'])
            ->make(true);
    }

    public function create(): View
    {
        return view('admin.pages.settings.pages.create');
    }

    public function edit($id): View
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.settings.pages.edit',compact('page'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Page::create(array_merge($data,['slug' => Str::slug(translit($data['title']),'-')]));
        return redirect(route('admin.settings.pages.index'))->with('success','გვერდი წარმატებით დაემატა!');
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $data = $request->all();
        Page::findOrFail($id)->update(array_merge($data,['slug' => Str::slug(translit($data['title']),'-')]));
        return redirect(route('admin.settings.pages.index'))->with('success','გვერდი წარმატებით განახლდა!');
    }

    public function delete(Request $request): JsonResponse
    {
        try {
            Page::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }
}
