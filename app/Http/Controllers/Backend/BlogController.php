<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SuccessStory;
use NabilAnam\SimpleUpload\SimpleUpload;

class BlogController extends Controller
{
    public function index()
    {

         $stories = SuccessStory::paginate(10);
        // dd($sotries);
        return view('backend.blog.index', compact('stories'));
    }

    public function view()
    {
        return view('backend.blog.view');
    }

    public function delivery()
    {
        return view('backend.blog.delivery');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.blog.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if((is_null($request->image)&& is_null($request->video))||(!empty($request->image)&&!empty($request->video)))
        {
            return back()->with('error','Please insert atleast 1 file!');
        }
        else
        {
        $all =($request->all());
        $all['image'] = (new SimpleUpload)
            ->file($request->image)
            ->dirName('Blog.Success')
            ->save();
        SuccessStory::create($all);
        return back()->with('message', 'Story Added Successfully!');
        }       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('backend.blog.show');
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
}
