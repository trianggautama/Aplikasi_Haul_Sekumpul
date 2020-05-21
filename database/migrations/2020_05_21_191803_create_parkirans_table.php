<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkirans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('posko_id');
            $table->unsignedBigInteger('petugas_id');
            $table->text('alamat_parkiran');
            $table->integer('jenis_parkiran')->length(2);
            $table->string('luas_parkiran')->length(75);
            $table->integer('status')->length(2);
            $table->foreign('posko_id')->references('id')->on('poskos')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('anggota_poskos')->onDelete('cascade');
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
        Schema::dropIfExists('parkirans');
    }
}
