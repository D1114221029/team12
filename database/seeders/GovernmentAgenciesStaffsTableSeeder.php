<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GovernmentAgenciesStaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table("government_agencies_staffs")->insert([
        [
            'agency_type' => '一般行政機關總計',
            'total_people' => 63633,
            'political_staff' => 246,
            'senior_rank_staff' => 33647,
            'recommended_rank_staff' => 14559,
            'appointed_rank_staff' =>123,
            'average_age' => 43.66,
            'average_seniority' => 15.35,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
