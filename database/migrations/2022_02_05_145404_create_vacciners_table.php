<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacciners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code_vaccin')->references('id')->on('vaccins');
            $table->foreignId('enfant_id')->references('id')->on('enfants');
            $table->date('date_vaccin');
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
        Schema::dropIfExists('vacciners');
    }
}
