<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Set;

class SetController extends Controller
{
    

    protected function validator(array $data)
    {
        return Validator::make($data, [
             
        'name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'integer', 'max:11', 'min:11'],
        'address' => ['required', 'string', 'max:255'],
        'about' => ['required', 'string'],


    ]);

    }

    
    public function index()
    {
        $setInfos = Set::first();
        return view('setInfo',compact('setInfos'));
    }

    
    function create(Request $request)
    {
        Set::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'about'=>$request->about,
            'logo'=>$request->logo,
        ]);
        
    }

}
