<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipts', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('description');
            $table->string('region');
            $table->string('category');
            $table->integer('vacancy');
            $table->string('status'); 
            $table->string('hr');             
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
        Schema::dropIfExists('ipts');
    }
}
