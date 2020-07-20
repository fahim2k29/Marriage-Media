<?php

use App\Home;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Registration_form;
use App\User;
use App\Aboutme;
use App\Education;
use App\Personal;
use App\Religion;
use App\OfficeUse;
use App\AddPhoto;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.dashboard.index');
    }

    public function user_dashboard()
    {
        
        $userid = Auth::id();
        $aboutme = Aboutme::whereuser_id($userid)->first();
        $education = Education::whereuser_id($userid)->first();
        $personal = Personal::whereuser_id($userid)->first();
        $religion = Religion::whereuser_id($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();

        return view('user.dashboard.index', compact('aboutme','education','personal','religion','officeUse','addPhoto'));
    }


    
}
