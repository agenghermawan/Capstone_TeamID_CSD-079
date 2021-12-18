<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $table) {
            $table->id();
            $table->string('namaPenyakit');
            $table->longText('deskripsiSingkat');
            $table->string('ditulisOleh');
            $table->string('photoPenyakit');
            $table->longText('gejala');
            $table->longText('penyebab');
            $table->longText('faktorRisiko');
            $table->longText('pengobatan');
            $table->longText('pencegahan');
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
        Schema::dropIfExists('penyakit');
    }
}
