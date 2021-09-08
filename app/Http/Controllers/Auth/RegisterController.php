<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email'=>'required|email |max:50|unique:users',
            'member_firstname'=>'required | max:25',
            'member_lastname'=>'required | max:25',
            'member_phonenumber'=>'required | max:12',
            'member_address'=>'required | max:265',
            'member_gender'=>'required | max:8',
            'password'=>'required | min:4 |confirmed'
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
        return User::create([
            'email' => $data['email'],
            'member_firstname' => $data['member_firstname'],
            'member_lastname' => $data['member_lastname'],
            'member_phonenumber' => $data['member_phonenumber'],
            'member_address' => $data['member_address'],
            'member_gender' => $data['member_gender'],
            'password' => Hash::make($data['password']),
        ]);
    }
}