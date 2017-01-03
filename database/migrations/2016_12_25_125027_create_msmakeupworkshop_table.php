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
            $table->string('workshop_avatar');
            $table->date('workshop_date');
            $table->integer('workshop_duration');
            $table->string('workshop_description');
            $table->string('workshop_city');
            $table->string('workshop_address');
            $table->integer('workshop_quota');
            $table->integer('workshop_price');
            $table->integer('workshop_ownerid')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); 
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
