<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDoctorRequest extends FormRequest
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
            'phone' => 'required',
            'age' => 'required',
            'address' => 'required',
            'image' => 'mimes:png,jpg',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name must be  required',
            'phone.required' => 'phone must be  required',
            'age.required' => 'age must be  required',
            'address.required' => 'address must be  required',
            'image.mimes' => 'image must be png,jpg',
        ];
    }
}
