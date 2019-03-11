<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tprioritas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
        });
        Schema::create('tkategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
        });
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->longText('keterangan');
            $table->string('screenshot',60)->nullable();
            $table->integer('tprioritas_id')->unsigned();
            $table->integer('pelanggan_id')->unsigned();
            $table->integer('dev_id')->unsigned();
            $table->integer('tkategori_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('tkomentar', function (Blueprint $table) {
            $table->increments('id');
            $table->text('komentar');
            $table->integer('pelanggan_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->timestamps();
        });
        Schema::create('taudit', function (Blueprint $table) {
            $table->increments('id');
            $table->text('operasi');
            $table->integer('pelanggan_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
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
        Schema::drop('taudit');
        Schema::drop('tkomentar');
        Schema::drop('ticket');
        Schema::drop('tkategori');
        Schema::drop('tprioritas');
    }
}
