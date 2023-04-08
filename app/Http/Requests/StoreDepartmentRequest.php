<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
           "name" => "required",
           "image" => "required|mimes:png,jpg"
        ];
    }
    public function messages()
    {
        return [
           "name.required" => "name is required",
           "image.required" => "image is required",
           "image.mimes" => "image is png or jpg",
        ];
    }
}
