<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required|numeric|unique:users',
            'national_id' => 'required|numeric|unique:users',
            'gender' => 'required',
            'image' => 'required',
            'age' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ' name is required',
            'phone.required' => 'phone is required',
            'phone.unique' => 'phone is unique',
            'national_id.required' => 'national_id is required',
            'national_id.unique' => 'national_id is unique',
            'phone.required' => 'phone is required',
            'gender.required' => 'gender is required',
            'image.required' => 'image is required',
            'age.required' => 'age is required',
        ];
    }

}
