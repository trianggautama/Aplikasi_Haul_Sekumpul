<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenemuanBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penemuan_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('posko_id');
            $table->string('nama_barang', 50);
            $table->string('merk', 50);
            $table->text('deskripsi');
            $table->tinyInteger('status');
            $table->string('foto', 100)->nullable();
            $table->string('penanggung_jawab', 50)->nullable();
            $table->string('foto_penyerahan', 50)->nullable();
            $table->string('ktp_penerima', 50)->nullable();
            $table->timestamps();
            $table->foreign('posko_id')->references('id')->on('poskos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penemuan_barangs');
    }
}
