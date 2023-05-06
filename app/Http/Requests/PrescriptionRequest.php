<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrescriptionRequest extends FormRequest
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
            "patient_id" => 'required',
            "doctor_id" => 'required',
            "diagnosis" => 'required',

            "date" => 'required',
        ];
    }
    public function messages()
    {
        return [
            'diagnosis.required' => 'diagnosis is required',
           
            'date.required' => 'date is required',
        ];
    }
}
