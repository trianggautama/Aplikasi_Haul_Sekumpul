<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenemuanOrangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penemuan_orangs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->foreignId('posko_id')->onDelete('cascade');
            $table->string('nama_orang', 50);
            $table->string('umur', 20);
            $table->text('alamat');
            $table->string('ciri_fisik', 100);
            $table->text('deskripsi');
            $table->string('foto', 100)->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('penemuan_orangs');
    }
}
