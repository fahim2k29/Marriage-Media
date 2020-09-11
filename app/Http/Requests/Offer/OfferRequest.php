<?php

namespace App\Http\Requests\Offer;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:packages',
            'price' => 'required',
            'duration' => 'required|string',

            // 'image' => 'required|image|dimensions:min_width=100,min_height=100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "position is required.",
            'duration.string' => 'must fill this and also string ',
            'position.integer'  => 'position must be Number.',
            'name.unique'   => 'position has already been taken.',
            'price.required'  => 'Must fill this.',
        ];
    }
}
