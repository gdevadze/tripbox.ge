<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAboutController extends Controller
{
    public function index(): View
    {
        $contactSettings = GeneralSetting::where('key','LIKE','%about%')->get();
        
        return view('admin.pages.settings.about',compact('contactSettings'));
    }

    public function update(Request $request)
    {
        foreach ($request->settings as $key => $value) {
            GeneralSetting::firstWhere('key', $key)->update([
                'value' => $value
            ]);
        }
        return redirect()->back()->with('success','ინფორმაცია წარმატებით განახლდა!');
    }
}
