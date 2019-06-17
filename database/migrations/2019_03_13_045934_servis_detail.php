<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServisDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('servis_id')->nullable();
            $table->integer('jasa_id')->nullable();
            $table->string('jasa_nama')->nullable();
            $table->double('jasa_biaya');
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
