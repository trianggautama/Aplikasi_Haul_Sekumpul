<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehilanganOrangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehilangan_orangs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('posko_id');
            $table->string('nama_orang', 50);
            $table->string('umur', 20);
            $table->text('alamat');
            $table->string('ciri_fisik', 100);
            $table->text('deskripsi');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('kehilangan_orangs');
    }
}
