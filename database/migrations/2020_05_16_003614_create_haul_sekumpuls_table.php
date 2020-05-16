<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaulSekumpulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haul_sekumpuls', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->text('informasi_acara');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('ketua_panitia', 100);
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
        Schema::dropIfExists('haul_sekumpuls');
    }
}
