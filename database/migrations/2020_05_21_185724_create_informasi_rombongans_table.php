<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiRombongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_rombongans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('posko_id');
            $table->string('asal_rombongan')->length(75);
            $table->string('nama_ketua_rombongan')->length(75);
            $table->integer('jumlah_rombongan')->length(9);
            $table->string('no_hp')->length(15);
            $table->foreign('posko_id')->references('id')->on('poskos')->onDelete('cascade');
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
        Schema::dropIfExists('informasi_rombongans');
    }
}
