<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran_donasis', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->foreignId('haul_sekumpul_id')->onDelete('cascade');
            $table->string('penanggung_jawab', 100);
            $table->string('keperluan', 100);
            $table->string('besaran', 100);
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
        Schema::dropIfExists('pengeluaran_donasis');
    }
}
