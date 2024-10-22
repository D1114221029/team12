<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('agency_type')->comment('機關類別');
            $table->integer('total_count')->comment('總計(人)');
            $table->integer('government_officials')->comment('政務人員');
            $table->integer('simple_appointees')->comment('簡任(派)');
            $table->integer('recommended_appointees')->comment('薦任(派)');
            $table->integer('commissioned_appointees')->comment('委任(派)');
            $table->double('average_age', 4, 2)->comment('平均年齡(歲)');
            $table->double('average_seniority', 4, 2)->comment('平均年資(年)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_statistics');
    }
}
