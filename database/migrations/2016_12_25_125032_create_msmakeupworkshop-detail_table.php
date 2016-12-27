<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsmakeupworkshopDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msmakeupworkshop_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workshop_id');
            $table ->timestamps();
            $table->foreign('workshop_id')->references('id')->on('msmakeupworkshop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msmakeupworkshop_detail');
    }
}
