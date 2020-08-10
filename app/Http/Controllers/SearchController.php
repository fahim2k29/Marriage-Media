<?php

namespace App\Http\Controllers;

use App\Employment;
use App\PersonalData;
use App\ReligionData;
use App\SignupData;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
         $signupdatas= SignupData::all();
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
}
