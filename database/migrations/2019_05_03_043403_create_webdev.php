<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebdev extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webdev', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('judul')->nullable();
            $table->longtext('konten')->nullable();
            $table->string('tags')->nullable();
            $table->integer('cms_users_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webdev');
    }
}
