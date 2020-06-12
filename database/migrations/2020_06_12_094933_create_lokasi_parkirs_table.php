<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiParkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_parkirs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->string('alamat', 100);
            $table->foreignId('posko_id')->onDelete('cascade');
            $table->foreignId('anggota_posko_id')->onDelete('cascade');
            $table->string('luas_parkir', 50);
            $table->string('status', 50)->default(0);
            $table->string('jenis_parkir', 20);
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
        Schema::dropIfExists('lokasi_parkirs');
    }
}
