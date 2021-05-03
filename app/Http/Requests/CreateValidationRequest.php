<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            'fullName' => 'required|string|max:40',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'address' => 'required',
            // 'img' => 'required|mimes:png,jpg,jpeg|max:5000'
        ];
    }
}
