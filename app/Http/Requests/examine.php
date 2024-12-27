<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class examine extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'agency_type'=>'required|string',
            'total_count'=>'required',
            'government_officials'=>'required',
            'simple_appointees'=>'required',
            'recommended_appointees'=>'required',
            'commissioned_appointees'=>'required',
            'average_age'=>'required|min:20|max:75',
            'average_seniority'=>'required|min:1|max:55',
        ];
    }
}
