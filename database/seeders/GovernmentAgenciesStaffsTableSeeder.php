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
            'total_count' => 63633,
            'goverment_offical' => 246,
            'simple_appointees' => 33647,
            'recommended_appointees' => 14559,
            'average_age' => 43.66,
            'average_seniority' => 15.35,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
