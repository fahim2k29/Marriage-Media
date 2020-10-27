<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Hash;

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
        // $all = $request->all();
        // $all = Hash::make($request['password']);


         $validatedData = $request->validate([
        'name' => 'required|unique:admins|max:255',
        'email'=> 'required|email',
        'password' => 'required',
        ]);

        Admin::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request['password']),
            'is_super' =>true,
        ]);

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
       $user = Admin::find($id);
       return view('backend.admin.edit',compact('user'));
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
         if($request->password != ''){
            Admin::where('id', $id)->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'password' =>Hash::make($request['password']),
                'is_super' =>true,
            ]);
        }
        else{
            Admin::where('id', $id)->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'is_super' =>true,
            ]);            
        }
        return redirect()->route('backend.admin.index')->with('message', 'Admin Update Successfully!');
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
