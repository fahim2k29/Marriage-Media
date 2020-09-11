<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Offer\OfferRequest;
use App\Http\Requests\Offer\OfferUpdateRequest;
use App\Models\Package;
use NabilAnam\SimpleUpload\SimpleUpload;

class PackageController extends Controller
{
    public function index()
    {
        $offers = Package::paginate(10);
        return view('backend.package.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        $all = $request->all();
        Package::create($all);
        return back()->with('message','Package Created Successfully');
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
       $offer = Package::find($id);
       return view('backend.package.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Offer $offer)
    {
        $all = $request->all();
        // $all['image'] = (new SimpleUpload)
        //     ->file($request->image)
        //     ->dirName('banners')
        //     ->deleteIfExists($offer->image)
        //     ->save();

        $all = $offer->update($all);
        
        return back()->with('message', 'Package Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
         $offer->delete();

        return back()->with('message', 'Deleted Successfully!');
    }
}
