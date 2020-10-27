<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
       
        return view('backend.dashboard.index')->with('message', 'Hola!');
    }
}
