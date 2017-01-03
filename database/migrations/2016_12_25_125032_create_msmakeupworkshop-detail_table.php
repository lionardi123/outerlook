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
            $table->integer('workshop_id')->unsigned();
            $table->integer('workshop_participantid')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); 
            $table->foreign('workshop_id')->references('id')->on('msmakeupworkshop');
            $table->foreign('workshop_participantid')->references('id')->on('msusers');
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
