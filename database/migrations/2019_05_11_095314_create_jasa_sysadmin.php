<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJasaSysadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_sysadmin', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_servis')->nullable();
            $table->string('desk_servis')->nullable();
            $table->string('harga_servis')->nullable();
            $table->string('servis_satu')->nullable();
            $table->string('servis_dua')->nullable();
            $table->string('servis_tiga')->nullable();
            $table->string('servis_empat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa_sysadmin');
    }
}
