<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaPoskosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_poskos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('posko_id');
            $table->string('nama')->length(100);
            $table->string('jabatan', 35);
            $table->string('no_hp', 13);
            $table->text('tugas');
            $table->text('foto');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('anggota_poskos');
    }
}
