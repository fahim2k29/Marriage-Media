<?php

namespace App\Http\Controllers;

use App\Models\QuickPage;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function Umrah_Winners($id)
    {
        $stories = QuickPage::findOrFail($id);
        // dd($stories); 
        return view('footerPages.UmrahWinners', compact('stories'));
    }
}
