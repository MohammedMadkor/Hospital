<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeriodRequest extends FormRequest
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
            'Shift_id' => 'required',
            'period_number'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'Shift_id.required' => ' Shift_id is required',
            'period_number.required' => ' period_number is required',
        ];
    }
}
