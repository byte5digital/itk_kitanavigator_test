<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKinderBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinder_bases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vorname');
            $table->string('nachname');
            $table->string('strasse');
            $table->string('ort');
            $table->string('plz');
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
        Schema::dropIfExists('kinder_bases');
    }
}
