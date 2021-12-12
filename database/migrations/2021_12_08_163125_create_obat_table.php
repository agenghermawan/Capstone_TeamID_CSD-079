<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
     /*       $table->string('kategori_id');*/
            $table->string('deskripsi');
            $table->string('productObat');
            $table->string('dosisdanaturan');
            $table->string('interaksi');
            $table->string('efekSamping');
            $table->string('namaObat');
            $table->string('golongan');
            $table->string('photoObat');
            $table->string('kategori');
            $table->string('manfaat');
            $table->string('bentukObat');
            $table->string('merkDagang');
/*            $table->foreign('kategori_id')->references('id')->on('kategori_obat')->onDelete('cascade');*/
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
        Schema::dropIfExists('obat');
    }
}
