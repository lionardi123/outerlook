<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsmakeupworkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msmakeupworkshop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('workshop_name');
            $table->integer('workshop_ownerid')->unsigned();
            $table->timestamps();
            $table->foreign('workshop_ownerid')->references('id')->on('msusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msmakeupworkshop');
    }
}
