<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsmakeupclassDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msmakeupclass_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->timestamps();
            $table->foreign('class_id')->references('id')->on('msmakeupclass');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msmakeupclass_detail');
    }
}
