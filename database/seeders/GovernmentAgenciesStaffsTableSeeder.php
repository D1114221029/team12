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
            ['agency_type' => '一般行政機關總計', 'total_people' => 61633, 'political_staff' => 246, 'senior_rank_staff' => 3374, 'recommended_rank_staff' => 33647, 'appointed_rank_staff' => 14559, 'average_age' => 43.66, 'average_seniority' => 15.35],
            ['agency_type' => '一般行政機關男性', 'total_people' => 32142, 'political_staff' => 187, 'senior_rank_staff' => 2132, 'recommended_rank_staff' => 15593, 'appointed_rank_staff' => 5291, 'average_age' => 43.62, 'average_seniority' => 15.34],
            ['agency_type' => '一般行政機關女性', 'total_people' => 29491, 'political_staff' => 59, 'senior_rank_staff' => 1242, 'recommended_rank_staff' => 18054, 'appointed_rank_staff' => 9268, 'average_age' => 43.71, 'average_seniority' => 15.35],
            ['agency_type' => '外交僑務機關總計', 'total_people' => 1863, 'political_staff' => 27, 'senior_rank_staff' => 526, 'recommended_rank_staff' => 1135, 'appointed_rank_staff' => 169, 'average_age' => 46.06, 'average_seniority' => 17.40],
            ['agency_type' => '外交僑務機關男性', 'total_people' => 959, 'political_staff' => 22, 'senior_rank_staff' => 378, 'recommended_rank_staff' => 509, 'appointed_rank_staff' => 50, 'average_age' => 48.13, 'average_seniority' => 18.80],
            ['agency_type' => '外交僑務機關女性', 'total_people' => 904, 'political_staff' => 5, 'senior_rank_staff' => 148, 'recommended_rank_staff' => 626, 'appointed_rank_staff' => 119, 'average_age' => 43.87, 'average_seniority' => 15.93],
            ['agency_type' => '警察行政機關總計', 'total_people' => 83605, 'political_staff' => 7, 'senior_rank_staff' => 162, 'recommended_rank_staff' => 3146, 'appointed_rank_staff' => 2534, 'average_age' => 40.04, 'average_seniority' => 16.68],
            ['agency_type' => '警察行政機關男性', 'total_people' => 71224, 'political_staff' => 7, 'senior_rank_staff' => 118, 'recommended_rank_staff' => 1804, 'appointed_rank_staff' => 941, 'average_age' => 40.63, 'average_seniority' => 17.72],
            ['agency_type' => '警察行政機關女性', 'total_people' => 12381, 'political_staff' => null, 'senior_rank_staff' => 44, 'recommended_rank_staff' => 1342, 'appointed_rank_staff' => 1593, 'average_age' => 36.64, 'average_seniority' => 10.73],
            ['agency_type' => '財稅行政機關總計', 'total_people' => 18202, 'political_staff' => 14, 'senior_rank_staff' => 598, 'recommended_rank_staff' => 13889, 'appointed_rank_staff' => 3699, 'average_age' => 44.60, 'average_seniority' => 16.11],
        ],
    ]);
    }
}
