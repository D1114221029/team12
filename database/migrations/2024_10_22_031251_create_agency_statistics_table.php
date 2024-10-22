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
            $table->string('agency_type');
            $table->integer('total_count');
            $table->integer('government_officials');
            $table->integer('simple_appointees');
            $table->integer('recommended_appointees');
            $table->integer('commissioned_appointees');
            $table->double('average_age', 4, 2);
            $table->double('average_seniority', 4, 2);
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
