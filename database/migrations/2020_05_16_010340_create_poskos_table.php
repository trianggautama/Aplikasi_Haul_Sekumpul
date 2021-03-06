<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoskosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poskos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('haul_sekumpul_id');
            $table->string('nama_posko')->length(60);
            $table->text('alamat');
            $table->string('no_hp')->length(15);
            $table->integer('jenis_posko')->length(3);
            $table->foreign('haul_sekumpul_id')->references('id')->on('haul_sekumpuls')->onDelete('cascade');
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
        Schema::dropIfExists('poskos');
    }
}
