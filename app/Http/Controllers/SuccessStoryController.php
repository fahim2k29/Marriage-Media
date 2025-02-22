<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuccessStory;

class SuccessStoryController extends Controller
{
    public function successStory_list()
    {   $stories = SuccessStory::all();
        return view('successStory.list',compact('stories'));
    }

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


    public function destroy(SuccessStory $successStory)
    {
        $successStory->delete();

        return back()->with('message', 'Story Deleted Successfully!');
    }
}
