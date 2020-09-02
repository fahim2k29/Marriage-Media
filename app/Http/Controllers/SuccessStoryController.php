<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuccessStory;

class SuccessStoryController extends Controller
{
      public function successStory()
    {
        $stories = SuccessStory::all();
        return view('successStory.index', compact('stories'));
    }

    public function successStory_show($id)
    {

        $stories  = SuccessStory::whereid($id)->first();
        return view('successStory.showDetails', compact('stories'));
    }
}
