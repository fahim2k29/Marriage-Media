<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Aboutme;
use App\Education;
use App\Personal;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/user/dashboard';


    protected function redirectTo()
      {
        $user_id = Auth::user()->id;
        $aboutme = Aboutme::whereuser_id($user_id)->get();
        $education = Education::whereuser_id($user_id)->get();
        $personal = Personal::whereuser_id($user_id)->get();



        if($aboutme->isEmpty())
        {
          return '/signup/aboutme';
        }
        elseif($education->isEmpty())
        {
          return '/signup/education';
        }
        elseif($personal->isEmpty())
        {
          return '/signup/personal';
        }
        else{
          return '/user/dashboard';
        }
        

        
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

