<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleDaysTable extends Migration
{

    public function up()
    {
        Schema::create('schedule_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('schedule_id')->unsigned();
            $table->tinyInteger('day');
            $table->timestamps();

            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedule_days');
    }
}
