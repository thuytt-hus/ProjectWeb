<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('college');
            $table->string('schoolyear');
            $table->string('majors');
            $table->float('score');
            $table->date('birth');
            $table->string('hometown');
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
        Schema::dropIfExists('scholar');
    }
}
