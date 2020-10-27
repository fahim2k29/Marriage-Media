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
        'FirstName' => 'required|string|min:3',
        'LastName' => 'required|string|min:3',
        'Address' => 'required|min:4',
        'City' => 'required',
        'PostCode' => 'required',
        'ContactTel' => 'required',
        'MobileTel' => 'required',
        ];
    }


    // public function messages()
    // {
    //     return [
    //         'FirstName.string'          =>  "FirstName must be string.",
    //         'LastName.string'           => "LastName must be string.",
    //         'City.string'               => "City must be string.",
    //         // 'ContactTel.phone'          => "Contact Number Should be valid",
    //         // 'MobileTel.phone'           => "Mobile Number Should be valid",
    //     ];
    // }
}
