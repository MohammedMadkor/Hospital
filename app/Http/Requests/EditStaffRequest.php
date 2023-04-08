<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditStaffRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required|numeric',
            'department_id'=>'required',
            'shift_id'=>'required',
            'address'=>'required',
            'salary'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'role'=>'required',
            'about'=>'required',
            'national_id'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'name is required',
            'phone.required'=>'phone is required',
            'phone.numeric'=>'phone is numeric',
            'department_id.required'=>'department_id is required',
            'shift_id.required'=>'shift_id is required',
            'address.required'=>'address is required',
            'salary.required'=>'salary is required',
            'info.required'=>'info is required',
            'gender.required'=>'gender is required',
            'image.required'=>'image is required',
            'about.required'=>'about is required',
            'image.mimes'=>' image must be jpg or png',
            'age.required'=>'age is required',
            'type.required'=>'type is required',
            'national_id.required'=>'national_id is required',
            'national_id.numeric'=>'national_id is number',

        ];
    }
}
