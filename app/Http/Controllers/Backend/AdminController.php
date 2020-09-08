<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function index()
    {
        $users = Admin::paginate(10);
        return view('backend.admin.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();
        // $all['image'] = (new SimpleUpload)
        //     ->file($request->image)
        //     ->dirName('offers')
        //     ->save();

        Admin::create($all);
        return back()->with('message','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $offer = Admin::find($id);
       return view('backend.admin.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Admin $user)
    {
        $all = $request->all();
        // $all['image'] = (new SimpleUpload)
        //     ->file($request->image)
        //     ->dirName('banners')
        //     ->deleteIfExists($offer->image)
        //     ->save();

        $all = $user->update($all);
        
        return back()->with('message', 'Admin Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $user)
    {
         $user->delete();

        return back()->with('message', 'Deleted Successfully!');
    }
}
