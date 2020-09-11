<?php

namespace App\Http\Requests\Offer;

use Illuminate\Foundation\Http\FormRequest;

class OfferUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:packages',
            'price' => 'required|max:4',
            'duration' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "position is required.",
            'duration.string' => 'must fill this and also string ',
            'position.integer'  => 'position must be Number.',
            'name.unique'   => 'position has already been taken.',
            'price.max'  => 'Invalid price type.',
        ];
    }
}
