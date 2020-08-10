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
use App\Employment;
use App\PersonalData;
use App\ReligionData;
use App\Rules\MatchOldPassword;
use App\SignupData;
use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function user_dashboard_profile()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $aboutme = Aboutme::whereuser_id($userid)->first();
        $education = Education::whereuser_id($userid)->first();
        $personal = Personal::whereuser_id($userid)->first();
        $religion = Religion::whereuser_id($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();

        $signupdatas= SignupData::all();
        $employments =Employment::all();
        $personaldatas=PersonalData::all();
        $religiondatas = ReligionData::all();
        return view('user.profile.index', compact('user','aboutme','education','personal','religion','officeUse','addPhoto', 'employments', 'signupdatas', 'personaldatas', 'religiondatas' ));
    }
    




    function aboutme_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Aboutme::whereuser_id($user_id)->first();            
        Aboutme::find($info->id)->update([
            'user_id'=>$user_id,
            'Headline'=>$request->Headline,
            'Description'=>$request->Description,
            'LookingFor'=>$request->LookingFor,
            ]);
            return back();
    }


    function education_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Education::whereuser_id($user_id)->first();
        Education::find($info->id)->update([
            'user_id'=>$user_id,
            'EducationLevel'=>$request->EducationLevel,
            'SubjectStudied'=>$request->SubjectStudied,
            'JobTitle'=>$request->JobTitle,
            'Employment'=>$request->Employment,
            'FirstLang'=>$request->FirstLang,
            'SecondLang'=>$request->SecondLang,                        
            ]);
            return back();
    }


    function personal_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Personal::whereuser_id($user_id)->first();
        Personal::find($info->id)->update([
            'user_id'=>$user_id,
            'Citizenship'=>$request->Citizenship,
            'Origin'=>$request->Origin,
            'Relocation'=>$request->Relocation,
            'Income'=>$request->Income,
            'MarryIn'=>$request->MarryIn,
            'MaritalStatus'=>$request->MaritalStatus,
            'Children'=>$request->Children,
            'HaveChildren'=>$request->HaveChildren,
            'Living'=>$request->Living,
            'Height'=>$request->Height,
            'Build'=>$request->Build,
            'Hair'=>$request->Hair,
            'EyeColour'=>$request->EyeColour,
            'Smoke'=>$request->Smoke,
            'Disabilities'=>$request->Disabilities,

            ]);
            return back();
        }





    function religion_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Religion::whereuser_id($user_id)->first();
        Religion::find($info->id)->update([
                'user_id'=>$user_id,
                'Religiosness'=>$request->Religiosness,
                'Sect'=>$request->Sect,
                'Hijab'=>$request->Hijab,
                'Beard'=>$request->Beard,
                'Convert'=>$request->Convert,
                'Halaal'=>$request->Halaal,
                'Salaah'=>$request->Salaah,
            ]);
            return back();
    }


    public function changePassword()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        return view('user.profile.changePassword', compact('user','addPhoto'));
    }

    public function changePassword_store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', 'Your Password Changed successfully!');
    }

    public function editPhoto()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        return view('user.profile.editPhoto', compact('user','addPhoto'));
    }
}
