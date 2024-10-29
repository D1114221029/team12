<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencyStatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(`agency_statistics`)->insert([
            'agency_type' => '一般行政機關總計',//機關類別
            'total_count' => 61633,//總計(人)
            'government_officials'=> 246,//政務人員
            'simple_appointees'=> 3374,//簡任(派)
            'recommended_appointees'=> 33647,//薦任(派)
            'commissioned_appointees'=> 14559,//委任(派)
            'average_age'=> 43.66,//平均年齡(歲)
            'average_seniority'=> 15.35,//平均年資(年)
            'created_at'=>now(),
            'updated_at'=> now()
        ]);
    }
}
