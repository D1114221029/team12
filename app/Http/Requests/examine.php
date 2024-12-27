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
            'agency_type' => 'required|string', // 機構類型：必填且為字串
            'total_count' => 'required|numeric', // 總數：必填且為數字
            'government_officials' => 'required|numeric', // 政府官員：必填且為數字
            'simple_appointees' => 'required|numeric', // 簡易任命人員：必填且為數字
            'recommended_appointees' => 'required|numeric', // 推薦任命人員：必填且為數字
            'commissioned_appointees' => 'required|numeric', // 委任任命人員：必填且為數字
            'average_age' => 'required|numeric|min:20|max:75', // 平均年齡：必填且為數字，範圍 20-75
            'average_seniority' => 'required|numeric|min:1|max:55', // 平均年資：必填且為數字，範圍 1-55
        ];
    }

    public function messages()
    {
        return [
            'agency_type.required' => '機構類型為必填項。',
            'agency_type.string' => '機構類型必須為字串。',
            
            'total_count.required' => '總數為必填項。',
            'total_count.numeric' => '總數必須為數字。',
            
            'government_officials.required' => '政府官員數量為必填項。',
            'government_officials.numeric' => '政府官員數量必須為數字。',
            
            'simple_appointees.required' => '簡易任命人員數量為必填項。',
            'simple_appointees.numeric' => '簡易任命人員數量必須為數字。',
            
            'recommended_appointees.required' => '推薦任命人員數量為必填項。',
            'recommended_appointees.numeric' => '推薦任命人員數量必須為數字。',
            
            'commissioned_appointees.required' => '委任任命人員數量為必填項。',
            'commissioned_appointees.numeric' => '委任任命人員數量必須為數字。',
            
            'average_age.required' => '平均年齡為必填項。',
            'average_age.numeric' => '平均年齡必須為數字。',
            'average_age.min' => '平均年齡不得低於 20 歲。',
            'average_age.max' => '平均年齡不得高於 75 歲。',
            
            'average_seniority.required' => '平均年資為必填項。',
            'average_seniority.numeric' => '平均年資必須為數字。',
            'average_seniority.min' => '平均年資不得低於 1 年。',
            'average_seniority.max' => '平均年資不得高於 55 年。',
        ];
    }
}
