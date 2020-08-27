<?php

namespace App\Http\Requests\SiteInfo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'name' => 'requuired|string',
        'site_title' => 'requuired|string',
        'logo' => 'requuired|image|dimensions:min_width=150,min_height=33',
        'address' => 'requuired|string',
        'email' => 'requuired|string',
        'mobile' => 'requuired|number',
        'meta_key' => 'requuired|string',
        'meta_desc' => 'requuired|string',
        'short_desc' => 'requuired|string',

        ];
    }

    public function messages()
    {
        return [

        'name.required' => 'Name field can not be empty.',
        'site_title.required' => 'Site_title can not be empty.',
        'logo.required' => 'Logo width minimum 150px & height minimum 33px.',
        'address.required' => 'Address field can not be empty.',
        'email.required' => 'Email field can not be empty.',
        'mobile.required' => 'Mobile field can not be empty.',
        'meta_key.required' => 'meta_key can not be empty.',
        'meta_desc.required' => 'meta_desc can not be empty.',
        'short_desc.required' => 'short_desc can not be empty.',

        ];
    }
}
