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
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SearchController extends Controller
{
    public function index()
    {
        $signupdatas = SignupData::all();
        return view('search.quick', compact('signupdatas'));
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
        return view('search.education', compact('employments', 'personaldatas'));
    }

    public function search_personal()
    {
        $personaldatas = PersonalData::all();
        return view('search.personal', compact('personaldatas'));
    }

    public function search_profession()
    {
        $employments = Employment::all();
        $personaldatas = PersonalData::all();
        return view('search.profession', compact('employments', 'personaldatas'));
    }

    public function search_result()
    {
        $data['user']       = User::find(auth()->id())->first();
        $data['addPhoto']   = AddPhoto::whereuser_id(auth()->id())->first();
        $data['users']      = User::paginate(30)->random(20);
        $data['aboutmes']   = Aboutme::all();
        $data['religions']  = Religion::all();
        $data['educations'] = Education::all();
        $data['personals']  = Personal::all();
        $data['emp']        = User::with('education')->get();
        $data['rlgn']       = User::with('religion')->get();
        $data['prsn']       = User::with('personal')->get();
        $data['img']        = User::with('addphoto')->get();
        $data['user']       = User::first(['DOB_year']);
        
        // dd($emp->toArray());
        return view('search.result', $data);
    }

    

    public function search_users(Request $request)
    {
        $data['user']       = User::find(auth()->id())->first();
        $data['addPhoto']   = AddPhoto::whereuser_id(auth()->id())->first();
        $data['users']      = User::paginate(30);
        $data['religions']  = Religion::all();

        $data['users'] = User::with('education')
        ->whereHas('education', function($q) use($request) {
            $q
            ->where('EducationLevel', $request->EducationLevel)
            ->where('FirstLang', $request->FirstLang)
            ->where('SecondLang', $request->SecondLang)
            ->where('Employment', $request->Employment);
        })
        ->whereHas('personal', function($q) use($request) {
            $q->where('Income', $request->Income);
        })
        ->get();
        
        $data['users'] = User::with('religion')
        ->whereHas('religion', function($q) use($request) {
            $q
            ->where('Sect', $request->Sect)
            ->where ('Religiosness', $request->Religiosness)
            ->where ('Hijab', $request->Hijab)
            ->where ('Beard', $request->Beard)
            ->where ('Convert', $request->Convert)
            ->where ('Halaal', $request->Halaal)
            ->where ('Salaah', $request->Salaah);
        })
        ->get();


        // $data['users'] = User::with('personal')
        // ->whereHas('personal', function($q) use($request) {
        //     $q
        //     ->where ('Citizenship', $request->Citizenship)
        //     ->where ('Origin', $request->Origin)
        //     ->where ('Relocation', $request->Relocation)
        //     ->where ('Income', $request->Income)
        //     ->where ('MarryIn', $request->MarryIn)
        //     ->where ('MaritalStatus', $request->MaritalStatus)
        //     ->where ('HaveChildren', $request->HaveChildren)
        //     ->where ('Children', $request->Children)
        //     ->where ('Living', $request->Living)
        //     ->where ('Height', $request->Height)
        //     ->where ('Build', $request->Build)
        //     ->where ('Hair', $request->Hair)
        //     ->where ('EyeColour', $request->EyeColour)
        //     ->where ('Smoke', $request->Smoke)
        //     ->where ('Disabilities', $request->Disabilities);
        // })
        // ->get();

        // return $request->all();
        // return $data;

        return view('search.result', $data);
    }

}
