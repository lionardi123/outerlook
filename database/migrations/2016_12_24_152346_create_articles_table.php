<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_title');
            $table->longtext('article_body');
            $table->integer('admin_id')->unsigned();
            $table->string('article_imagedetail');
            $table->string('article_imagecard');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('msusers');
            
        });

        /*Schema::table('msarticles',function(Blueprint $table){

        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msarticles');
    }
}
