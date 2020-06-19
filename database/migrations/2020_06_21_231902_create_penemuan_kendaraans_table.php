<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenemuanKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penemuan_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('posko_id');
            $table->unsignedBigInteger('lokasi_parkir_id');
            $table->string('plat_nomor', 50);
            $table->string('merk_kendaraan', 50);
            $table->string('warna', 20);
            $table->string('nama_pelapor', 50);
            $table->string('no_hp_pelapor', 13);
            $table->string('foto', 100)->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('posko_id')->references('id')->on('poskos')->onDelete('restrict');
            $table->foreign('lokasi_parkir_id')->references('id')->on('lokasi_parkirs')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penemuan_kendaraans');
    }
}
