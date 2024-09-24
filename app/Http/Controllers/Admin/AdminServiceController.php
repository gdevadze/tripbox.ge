<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminServiceController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.settings.services.index');
    }

    public function getServicesForAjax(): JsonResponse
    {
        return Datatables()->of(Service::query()->latest())
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
//                $html = '';
                $html = $btn = '';
                // if (currentUser()->can('blog-edit')) {
                    $html .= $btn . ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="'.route('admin.settings.services.edit',$data->id).'"><i class="fa fa-edit"></i></a>';
                // }
                // if (currentUser()->can('blog-delete')) {
                    $html .= $btn . ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deleteService(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
                // }


                return $html;
            })
            ->rawColumns(['role', 'action'])
            ->make(true);
    }

    public function create(): View
    {
        return view('admin.pages.settings.services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Service::create($request->all());

        return redirect()->to(route('admin.settings.services.index'))->with('success','სერვისი წარმატებით დაემატა!');
    }

    public function edit($id): View
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.settings.services.edit',compact('service'));
    }

    public function update(Request $request,$id): RedirectResponse
    {
        Service::findOrFail($id)->update($request->all());

        return redirect()->to(route('admin.settings.services.index'))->with('success','სერვისი წარმატებით განახლდა!');
    }

    public function delete(Request $request): JsonResponse
    {
        try {
            Service::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception){
            return jsonResponse(['status' => 0]);
        }
    }
}
