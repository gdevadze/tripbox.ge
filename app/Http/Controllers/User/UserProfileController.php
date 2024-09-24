<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfileController extends Controller
{

    public function changePassword()
    {
        return view('user.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = currentUser();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'მიმდინარე პაროლი არასწორია');
        }

        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with('success', 'პაროლი წარმატებით განახლდა!');
    }


    public function profile(): View
    {
        return view('user.pages.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = currentUser();
        $data = $request->all();
        if($request->img){
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('profile_images'), $imageName);
            $data['img'] = $imageName;
        }
        if(isset($data['password']) && $user->profile_finished == 0){
            $data['password'] = Hash::make($request->password);
//            $data['profile_finished'] = 1;
        }
        $user->update($data);
        return redirect()->back()->with('success','Информация о пользователе успешно обновлена!');
    }
}
