<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'FirstName' => 'required|string|min:4',
        'LastName' => 'required|string|min:4',
        'Address' => 'required|min:4',
        'City' => 'required|string|max:15',
        'PostCode' => 'required|min:4|max:6',
        'ContactTel' => 'required|phone|min:11|max:13',
        'MobileTel' => 'required|phone|min:11|max:13',
        ];
    }


    public function messages()
    {
        return [
            'FirstName.string'          =>  "FirstName must be string.",
            'LastName.string'           => "LastName must be string.",
            'City.string'               => "City must be string.",
            'ContactTel.phone'          => "Contact Number Should be valid",
            'MobileTel.regex'           => "Mobile Number Should be valid",
        ];
    }
}
