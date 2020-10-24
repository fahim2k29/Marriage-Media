<?php

namespace App\Http\Controllers;

use App\Models\QuickPage;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function pages($id)
    {
        $stories = QuickPage::findOrFail($id);

        return view('footerPages.quickPages', compact('stories'));
    }
}
