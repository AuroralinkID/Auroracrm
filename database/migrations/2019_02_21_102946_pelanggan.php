<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id', 50);
            $table->integer('cms_users_id')->unsigned();
            $table->string('email', 50);
            $table->string('nama', 50);
            $table->string('alamat', 50);
            $table->string('provinsi', 50);
            $table->string('kota', 50);
            $table->date('tanggal_lahir');
            $table->integer('perusahan_id')->unsigned();
            $table->enum('status', ['leads', 'pelanggan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
