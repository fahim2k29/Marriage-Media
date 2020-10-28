<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'position' => 'required|integer|unique:sliders,position,'.$this->slider->id,
            'image' => 'required|image|dimensions:max_width=300,max_height=200',
        ];
    }

    public function messages()
    {
        return [
            'position.required' => "position is required.",
            'position.integer'   => 'position must be Number.',
        ];
    }
}
