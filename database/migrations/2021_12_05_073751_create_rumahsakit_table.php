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
            $table->string('alamat',255);
            $table->string('provinsi',40);
            $table->integer('kodepos');
            $table->string('kota',40);
            $table->mediumText('tentang');
            $table->string('notelp',40);
            $table->longText('lokasiGmaps');
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
