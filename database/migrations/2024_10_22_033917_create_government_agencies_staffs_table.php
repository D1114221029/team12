<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentAgenciesStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_agencies_staffs', function (Blueprint $table) {
            $table->id(); // Primary key with auto-increment
            $table->string('agency_type'); // 機關類別，例如「一般行政機關」
            $table->integer('total_people')->unsigned(); // 總計人數
            $table->integer('political_staff')->unsigned(); // 政務人員數量
            $table->integer('senior_rank_staff')->unsigned(); // 簡任(派)人員數量
            $table->integer('recommended_rank_staff')->unsigned(); // 薦任(派)人員數量
            $table->integer('appointed_rank_staff')->unsigned(); // 委任(派)人員數量
            $table->double('average_age', 5, 2); // 平均年齡 (精確到小數點後兩位)
            $table->double('average_seniority', 5, 2); // 平均年資 (精確到小數點後兩位)
            $table->timestamps(); // Laravel 預設的 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('government_agencies_staffs');
    }
}
