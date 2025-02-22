<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteInfo\UpdateRequest;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use NabilAnam\SimpleUpload\SimpleUpload;

class SiteInfoController extends Controller
{
    public function index()
    {
        return view('backend.site_info.index');
    }

    public function update(Request $request)
    {
        $info = SiteInfo::find(1);

        $logo = (new SimpleUpload)
            ->file($request->file('logo'))
            ->dirName('site')
            ->deleteIfExists($info->logo)
            ->save();

        $info->update([
            'logo' => $logo,
            'name' => $request->name,
            'site_title' => $request->site_title,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'meta_key' => $request->meta_key,
            'meta_desc' => $request->meta_desc,
            'short_desc' => $request->short_desc,
        ]);

        return redirect()
            ->route('backend.site_config.info')
            ->with('message', 'Site Information Updated Successfully');
    }
}
