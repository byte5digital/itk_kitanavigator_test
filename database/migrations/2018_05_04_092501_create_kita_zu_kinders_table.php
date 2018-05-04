<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitaZuKindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kita_zu_kinders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kinder_base_id');
            $table->unsignedInteger('kita_base_id');
            $table->foreign('kinder_base_id')->references('id')->on('kinder_bases');
            $table->foreign('kita_base_id')->references('id')->on('kita_bases');
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
        Schema::dropIfExists('kita_zu_kinders');
    }
}
