<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.quick');
    }

    public function search_religion()
    {
        return view('search.religion');
    }

    public function search_education()
    {
        return view('search.education');
    }

    public function search_personal()
    {
        return view('search.personal');
    }

    public function search_profession()
    {
        return view('search.profession');
    }
}
