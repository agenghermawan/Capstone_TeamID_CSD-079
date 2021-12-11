<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahsakit', function (Blueprint $table) {
            $table->id();
            $table->string('nama',40);
            $table->string('alamat',100);
            $table->string('provinsi',40);
            $table->integer('kodepos');
            $table->string('kota',40);
            $table->string('tentang',40);
            $table->string('notelp',40);
            $table->string('lokasiGmaps');
            $table->string('jamOperasional');
            $table->json('fasilitas');
            $table->json('poliklinik')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('rumahsakit');
    }
}
