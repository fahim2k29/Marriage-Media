<?php

namespace App\Http\Controllers\Backend;

use App\AddPhoto;
use App\Http\Controllers\Controller;
use App\Personal;
use App\User;
use App\Payment;

use App\Models\Package;

use Illuminate\Http\Request;

class MemberController extends Controller
{
public function index()
    {
        
        $users     = User::with('payment')->get();
        $use      = Payment::with('package')->get();
        // dd($user;
        $addPhotos  = AddPhoto::all();
        return view('backend.member.index', compact('users','addPhotos','use'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users= User::findOrFail($id);
        $personals = Personal::whereuser_id($id)->first();
        // dd($personals);
        $addPhotos=AddPhoto::whereuser_id($id)->first();

        return view('backend.member.show', compact('users','addPhotos', 'personals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  User::where('id',$id)->delete();
        //          return redirect()->route('backend.customer.index')
        //          ->with('success','User deleted successfully from the user list.');
    }
     

}
