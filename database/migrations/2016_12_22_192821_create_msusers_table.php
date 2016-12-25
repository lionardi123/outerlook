<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_fullname');
            $table->integer('user_usertypeid')->unsigned();
            $table->string('user_gender');
            $table->date('user_DOB');
            $table->string('user_state');
            $table->string('user_city');
            $table->string('user_zip');
            $table->string('user_address');
            $table->string('user_about')->default('abc');
            $table->string('user_phone')->default('081298810551');
            $table->string('user_avatar')->nullable();
            
            $table->foreign('user_usertypeid')->references('id')->on('ltusertype');  
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));  
           
        });

       // Schema::table('msusers',function($table){
            

       // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msusers');
    }
}
