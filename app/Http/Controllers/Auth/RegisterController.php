<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\MessageService;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/orders';

    protected $messageService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MessageService $messageService)
    {
        $this->middleware('guest');
        $this->messageService = $messageService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_type' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'company_name' => [],
            'tel' => ['required', 'string', 'max:255'],
            'tel_index' => [],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'city_id' => [],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'user_type' => $data['user_type'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'company_name' => isset($data['company_name']) ? $data['company_name'] : null,
            'tel' => $data['tel_index'].$data['tel'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'city_id' => isset($data['city_id']) ? $data['city_id'] : null,
            'is_verified' => ($data['user_type'] == 1) ? 1 : 1
        ]);
        $user->assignRole(4);
        if($user->is_verified == 0){
            if($user->city_id == 1 || $user->city_id == 3){
                // $this->messageService->email('tripbox@checkinkutaisi.com', 'no-reply@tripbox.ge','ახალი პარტნიორის რეგისტრაცია, ელოდება დადასტურებას!');
                $this->messageService->email('giolazi@yahoo.com', 'no-reply@tripbox.ge','ახალი პარტნიორის რეგისტრაცია, ელოდება დადასტურებას!');
            }else{
                $this->messageService->email('giolazi@yahoo.com', 'no-reply@tripbox.ge','ახალი პარტნიორის რეგისტრაცია, ელოდება დადასტურებას!');
                // $this->messageService->email('tripbox@checkinkutaisi.com', 'no-reply@tripbox.ge','ახალი პარტნიორის რეგისტრაცია, ელოდება დადასტურებას!');
            }
            
        }
        return $user;
    }
}
