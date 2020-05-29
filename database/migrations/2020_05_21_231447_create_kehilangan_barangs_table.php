<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehilanganBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehilangan_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('posko_id');
            $table->string('nama_barang', 50);
            $table->string('merk', 50);
            $table->text('deskripsi');
            $table->string('no_hp');
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
        Schema::dropIfExists('kehilangan_barangs');
    }
}
