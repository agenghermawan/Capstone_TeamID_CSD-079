<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJanjitemuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('janjitemu', function (Blueprint $table) {
            $table->id();
            $table->string('rumahsakit_id');
            $table->string('user_id');
            $table->string('poliklinik_id');
            $table->string('dokter_id');
            $table->string('email');
            $table->string('nama');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('tanggal_lahir');
            $table->string('ktp');
            $table->string('telp');
            $table->string('kota');
            $table->string('tanggal_janji');
            $table->string('jam_janji');
            $table->string('catatan')->nullable();
            $table->string('status')->default('request');
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
        Schema::dropIfExists('janjitemu');
    }
}
