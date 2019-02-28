<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PembayaranDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pembayaran_id')->nullable();
            $table->integer('servis_id')->nullable();
            $table->string('servis_kode_servis')->nullable();
            $table->double('servis_biaya');
            $table->integer('produk_id')->nullable();
            $table->string('produk_nama')->nullable();
            $table->double('produk_harga_jual');
            $table->integer('qty')->default(0);
            $table->double('sub_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_detail');
    }
}
