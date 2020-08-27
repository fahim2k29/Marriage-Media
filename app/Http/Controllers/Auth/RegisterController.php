<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
// use App\Http\Requests\User\SignupRequest;

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
    protected $redirectTo = '/signup/aboutme';

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
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],

                        
            // 'UserName'=>['required'],
            'UserName' => 'required|string|unique:users',
            'Email'=>'required|string|email|unique:users',
            'ConfirmEmail'=>'required|same:Email',
            'Country'=>'required',
            'Gender'=>'required',
            'DOB_day'=>'required',
            'DOB_month'=>'required',
            'DOB_year'=>'required',
            'RegistrationReason'=>'required',
            'HearAboutUs'=>'required',
            'Accept'=>'required',
            'password'=>'required|min:8',

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
        return User::create([
            
            'UserName' => $data['UserName'],
            'Email' => $data['Email'],
            'ConfirmEmail' => $data['ConfirmEmail'],
            'Country' => $data['Country'],
            'Gender' => $data['Gender'],
            'DOB_day' => $data['DOB_day'],
            'DOB_month' => $data['DOB_month'],
            'DOB_year' => $data['DOB_year'],
            'RegistrationReason' => $data['RegistrationReason'],
            'HearAboutUs' => $data['HearAboutUs'],
            'Accept' => $data['Accept'],         
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('aboutme');
    }
}
