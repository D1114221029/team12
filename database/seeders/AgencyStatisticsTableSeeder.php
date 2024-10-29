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
        /*
        行政(E)
        外交(MFA)
        警察(P)
        財稅(MOF)
        文教(MOE)
        司法(MOJ)
        經建(MOEC)
        交通(MOTC)
        衛生(MOH)
        社會(MOW)
        總計(ALL)
        男(W)
        女(F)

        DBmode
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


         */
        $ALLagency_type = array('一般行政機關總計','外交僑務機關總計','警察行政機關總計','財稅行政機關總計','文教行政機關總計','司法行政機關總計','經建行政機關總計','交通行政機關總計','衛生行政機關總計','社會福利機關總計');
        $Wagency_type = array('一般行政機關男性','外交僑務機關男性','警察行政機關男性','財稅行政機關男性','文教行政機關男性','司法行政機關男性','經建行政機關男性','交通行政機關男性','衛生行政機關男性','社會福利機關男性');
        $Fagency_type = array('一般行政機關女性','外交僑務機關女性','警察行政機關女性','財稅行政機關女性','文教行政機關女性','司法行政機關女性','經建行政機關女性','交通行政機關女性','衛生行政機關女性','社會福利機關女性');
        for ($i = 0; $i < 10; $i++)//各別總計
        {
            $wtotal_count = rand(950,33000);
            $Ftotal_count = rand(900,30000);
            $Wgovernment = rand(5,90);
            $Fgovernment = rand(0,60);
            $Wsimple = rand(100,3500);
            $Fsimple = rand(40,1300);
            $Wrecommended = rand(500,16000);
            $Frecommended = rand(600,18000);
            $Wcommissioned = rand(50,8000);
            $Fcommissioned = rand(100,10000);
            $Wage = rand(0,1)/1000;
            $Fage = rand(0,1)/1000;
            $Wseniority = rand(0,1);
            $Fseniority = rand(0,1);
            DB::table(`agency_statistics`)->insert([
                [
                    'agency_type' => $ALLagency_type,//機關類別
                    'total_count' => $wtotal_count+$Ftotal_count,//總計(人)
                    'government_officials'=> 246,//政務人員
                    'simple_appointees'=> 3374,//簡任(派)
                    'recommended_appointees'=> 33647,//薦任(派)
                    'commissioned_appointees'=> 14559,//委任(派)
                    'average_age'=> 43.66,//平均年齡(歲)
                    'average_seniority'=> 15.35,//平均年資(年)
                    'created_at'=>now(),
                    'updated_at'=> now()
                ],[
                    'agency_type' => $Wagency_type[$i],//機關類別
                    'total_count' => 61633,//總計(人)
                    'government_officials'=> 246,//政務人員
                    'simple_appointees'=> 3374,//簡任(派)
                    'recommended_appointees'=> 33647,//薦任(派)
                    'commissioned_appointees'=> 14559,//委任(派)
                    'average_age'=> 43.66,//平均年齡(歲)
                    'average_seniority'=> 15.35,//平均年資(年)
                    'created_at'=>now(),
                    'updated_at'=> now()
                ],[
                    'agency_type' => $Fagency_type[$i],//機關類別
                    'total_count' => 61633,//總計(人)
                    'government_officials'=> 246,//政務人員
                    'simple_appointees'=> 3374,//簡任(派)
                    'recommended_appointees'=> 33647,//薦任(派)
                    'commissioned_appointees'=> 14559,//委任(派)
                    'average_age'=> 43.66,//平均年齡(歲)
                    'average_seniority'=> 15.35,//平均年資(年)
                    'created_at'=>now(),
                    'updated_at'=> now()
                ]
            ]);
        }
    }
}
