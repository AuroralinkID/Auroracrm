<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('pelanggan_id')->nullable();
            $table->string('kode_servis',25)->nullable();
            $table->string('unit');
            $table->integer('k_servis')->nullable();
            $table->integer('s_garansi')->nullable();
            $table->integer('s_servis')->nullable();
            $table->string('snid',25)->nullable();
            $table->longText('keluhan');
            $table->integer('team_id')->nullable();            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servis');
    }
}
