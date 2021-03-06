<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('rumahsakit_id');
            $table->string('fullname');
            $table->string('telp');
            $table->string('alamat');
            $table->string('noStr');
            $table->string('email');
            $table->string('kota');
            $table->longText('deskripsi')->nullable();
            $table->string('sebagaiDokter');
            $table->longText('pengalamanPraktik')->nullable();
            $table->longText('riwayatPendidikan')->nullable();
            $table->string('status')->default('non-active');
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
        Schema::dropIfExists('dokter');
    }
}
