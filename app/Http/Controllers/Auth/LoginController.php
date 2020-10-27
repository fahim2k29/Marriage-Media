<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Aboutme;
use App\AddPhoto;
use App\Education;
use App\OfficeUse;
use App\Personal;
use App\Religion;

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
        $religion = Religion::whereuser_id($user_id)->get();
        $officeUse = OfficeUse::whereuser_id($user_id)->get();
        $addPhoto = AddPhoto::whereuser_id($user_id)->get();


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
         elseif($religion->isEmpty())
        {
          return '/signup/religion';
        }
        elseif($officeUse->isEmpty())
        {
          return '/signup/officeUse';
        }
        elseif($addPhoto->isEmpty())
        {
          return '/signup/addPhoto';
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

