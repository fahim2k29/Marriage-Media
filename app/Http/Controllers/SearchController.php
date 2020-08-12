<?php

namespace App\Http\Controllers;

use App\AddPhoto;
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
        $data['users']      = User::paginate(30);
        $data['religions']  = Religion::all();

        return view('search.result', $data);
    }

    public function search_users(Request $request)
    {
        $data['user']       = User::find(auth()->id())->first();
        $data['addPhoto']   = AddPhoto::whereuser_id(auth()->id())->first();
        // $data['users']      = User::paginate(30);
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

        // return $request->all();
        // return $data;

        return view('search.result', $data);
    }

}
