<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            // 'lab_id'=> ['alpha_dash', 'unique:users'],
            // 'role'=>  ['required'],
            // 'power'=>  ['required'],
            'image'=>  ['image'],
            'phone'=>  ['required'],
            'edu_dept'=>  ['required'],
            'edu_varsity'=>  ['required'],
            'edu_country'=>  ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // if ($request->hasFile('image')) {
        //         // your code here
        //     }
        
        if(isset($data['image'])){
            if($data['image']->getClientOriginalName()){
                    $ext = $data['image']->getClientOriginalExtension();
                    $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
                    $data['image']->storeAs('public/profile',$file);
                }else{
                    $file = NULL;
                }
        }else{
            $file = NULL;    
        }
                
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'lab_id' => NULL,
            'phone' => $data['phone'],
            'role' => 1,
            'power' => 0,
            'image' => $file,
            'edu_dept' => $data['edu_dept'],
            'edu_varsity' => $data['edu_varsity'],
            'edu_country' => $data['edu_country'],


        ]);
    }
}
