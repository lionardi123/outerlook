<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsmakeupclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msmakeupclass', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->string('class_avatar');
            $table->date('class_startdate');
            $table->date('class_enddate');
            $table->string('class_description');
            $table->integer('class_ownerid')->unsigned();
            $table->timestamps();
            $table->foreign('class_ownerid')->references('id')->on('msusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msmakeupclassa');
    }
}
