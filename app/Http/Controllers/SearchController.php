<?php

namespace App\Http\Controllers;

use App\Aboutme;
use App\AddPhoto;
use App\Education;
use App\Employment;
use App\Personal;
use App\PersonalData;
use App\Religion;
use App\ReligionData;
use App\SignupData;
use App\User;
use App\Country;
use App\Job;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SearchController extends Controller
{
    public function search_result_all()
    {   $users = User::relations()->get();
        return view('search.allView', compact('users'));
    }

    public function index()
    {
        $country = Country::all();
        return view('search.quick', compact('country'));
    }

    public function search_religion()
    {
        $religiondatas = ReligionData::all();
        return view('search.religion', compact('religiondatas'));
    }

    public function search_education()
    {
        $employments = Employment::all();
        $personaldatas = PersonalData::all();
        $jobs = Job::all();
        return view('search.education', compact('employments', 'personaldatas','jobs'));
    }

    public function search_personal()
    {
        $personaldatas = PersonalData::all();
        $country = Country::all();

        return view('search.personal', compact('personaldatas','country'));
    }

    public function search_username()
    {
        $employments = Employment::all();
        $personaldatas = PersonalData::all();
        return view('search.username', compact('employments', 'personaldatas'));
    }

    public function search_users(Request $request)
    {
         $datas = User::where('Gender', $request->Gender)
                ->where('Country', $request->Country)->get();
        return view('search.result', compact('datas'));
    }

    public function search_username_result(Request $request)
    {
         $datas = User::where('UserName', $request->UserName)->get();

        return view('search.result', compact('datas'));
    }


     public function search_education_result(Request $request)
    {

        $datas = User::find(auth()->id())->with('education','personal','religion','addphoto')
            ->whereHas('education', function($q) use($request) {
                $q->where('EducationLevel', $request->EducationLevel)
                ->where('FirstLang', $request->FirstLang)
                ->where('SecondLang', $request->SecondLang)
                ->where('Employment', $request->Employment);
            })
            ->whereHas('personal', function($q) use($request) {
                $q->where('Income', $request->Income);
            })->get();
        return view('search.result', compact('datas'));
    }


       public function search_religion_result(Request $request)
    {

        $datas = User::find(auth()->id())->with('education','personal','religion','addphoto')
        ->whereHas('religion', function($q) use($request) {
                $q->where('Sect', $request->Sect)
                ->where('Religiosness', $request->Religiosness)
                ->where('Hijab', $request->Hijab)
                ->where('Beard', $request->Beard)
                ->where('Convert', $request->Convert)
                ->where('Halaal', $request->Halaal)
                ->where('Salaah', $request->Salaah);
            })
         ->get();

        return view('search.result', compact('datas'));
    }



      public function search_personal_result(Request $request)
    {

         $datas = User::find(auth()->id())->with('education','personal','religion','addphoto')
        ->whereHas('personal', function($q) use($request) {
            $q->where('Citizenship', $request->Citizenship)
            ->where('Origin', $request->Origin)
            ->where('Relocation', $request->Relocation)
            ->where('Income', $request->Income)
            ->where('MarryIn', $request->MarryIn)
            ->where('MaritalStatus', $request->MaritalStatus)
            ->where('Children', $request->Children)
            ->where('HaveChildren', $request->HaveChildren)
            ->where('Living', $request->Living)
            ->where('Height', $request->Height)
            ->where('Build', $request->Build)
            ->where('Hair', $request->Hair)
            ->where('EyeColour', $request->EyeColour)
            ->where('Smoke', $request->Smoke)
            ->where('Disabilities', $request->Disabilities);
        })
        ->get();
        return view('search.result', compact('datas'));

    }




}
