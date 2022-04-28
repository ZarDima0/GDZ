<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->id();
            $table->string('nameFile');
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_direction');
            $table->string('path_file');
            $table->timestamps();
            $table->foreign('id_teacher')->references('id')->on('teachers');
            $table->foreign('id_direction')->references('id')->on('direction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file');
    }
}
