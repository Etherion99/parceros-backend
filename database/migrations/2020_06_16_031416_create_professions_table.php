<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionsTable extends Migration
{
    public function up()
    {
        Schema::create('professions', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 80);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professions');
    }
}
