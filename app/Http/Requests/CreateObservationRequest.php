<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateObservationRequest extends FormRequest
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
            'agency_type' => 'required',
            'total_people' => 'required|numeric|min:1|max:100',
            'political_staff' => 'required|numeric|min:1|max:100',
            'senior_rank_staff' => 'required|numeric|min:1|max:100',
            'recommended_rank_staff' => 'required|numeric|min:1|max:100',
            'appointed_rank_staff' => 'required|numeric|min:1|max:100',
            'average_age' => 'required|numeric|min:18|max:100', 
            'average_seniority' => 'required|numeric|min:0|max:50', 
        ];
    }

    public function message()
    {
        return [
            'agency_type.required' => '請選擇機構類型。',
            'total_people.required' => '請填寫總人數。',
            'total_people.numeric' => '總人數必須是數字。',
            'total_people.min' => '總人數不能少於 1。',
            'total_people.max' => '總人數不能超過 100。',
            'political_staff.required' => '請填寫人員數量。',
            'political_staff.numeric' => '人員數量必須是數字。',
            'political_staff.min' => '人員數量不能少於 1。',
            'political_staff.max' => '人員數量不能超過 100。',
            'senior_rank_staff.required' => '請填寫人員數量。',
            'senior_rank_staff.numeric' => '人員數量必須是數字。',
            'senior_rank_staff.min' => '人員數量不能少於 1。',
            'senior_rank_staff.max' => '人員數量不能超過 100。',
            'recommended_rank_staff.required' => '請填寫人員數量。',
            'recommended_rank_staff.numeric' => '人員數量必須是數字。',
            'recommended_rank_staff.min' => '人員數量不能少於 1。',
            'recommended_rank_staff.max' => '人員數量不能超過 100。',
            'appointed_rank_staff.required' => '請填寫人員數量。',
            'appointed_rank_staff.numeric' => '人員數量必須是數字。',
            'appointed_rank_staff.min' => '人員數量不能少於 1。',
            'appointed_rank_staff.max' => '人員數量不能超過 100。',
            'average_age.required' => '請填寫平均年齡。',
            'average_age.numeric' => '平均年齡必須是數字。',
            'average_age.min' => '平均年齡不能少於 18。',
            'average_age.max' => '平均年齡不能超過 100。',
            'average_seniority.required' => '請填寫平均年資。',
            'average_seniority.numeric' => '平均年資必須是數字。',
            'average_seniority.min' => '平均年資不能少於 0 年。',
            'average_seniority.max' => '平均年資不能超過 50 年。',
        ];
    }
    
}
