<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenutupanJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penutupan_jalans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('haul_sekumpul_id');
            $table->string('nama_jalan', 100);
            $table->tinyInteger('status');
            $table->string('jalan_alternatif', 100);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
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
        Schema::dropIfExists('penutupan_jalans');
    }
}
