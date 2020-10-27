<?php

namespace App\Http\Controllers\Backend;

use App\ContactUs;
use App\Http\Controllers\Controller;
use App\QueryMessages;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $info = ContactUs::first();
        return view('backend.contactUs',compact('info'));
    }

    public function update(Request $request)
    {
        $info = ContactUs::find(1);
        $info->update([
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return back()->with('message', 'Contact Information Updated Successfully');
    }

    public function queryMessages(Request $request)
    {
        QueryMessages::insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
            'created_at'=>Carbon::now(+1),
        ]);
        return back()->with('message', 'Your Messages Sent Successfully');
    }

    public function contactUs()
    {
        $contact = ContactUs::first();
        // dd($contacts);
        return view('user.contactUs', compact('contact'));
    }
}
