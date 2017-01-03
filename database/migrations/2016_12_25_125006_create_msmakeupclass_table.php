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
            $table->integer('class_quota');
            $table->string('class_description');
            $table->string('class_city');
            $table->string('class_address');
            $table->integer('class_price');
            $table->integer('class_ownerid')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); 
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
