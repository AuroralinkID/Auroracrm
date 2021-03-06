<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('kategori_id')->nullable();
            $table->integer('sub_kategori_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->string('nama')->nullable();
            $table->text('deskripsi')->nullable();
            $table->double('berat')->default(0);
            $table->double('harga_beli');
            $table->double('harga_jual');
            $table->integer('stock')->default(0);
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop');
    }
}
