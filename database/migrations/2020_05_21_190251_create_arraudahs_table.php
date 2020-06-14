<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArraudahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arraudahs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->string('judul')->length(75);
            $table->text('isi');
            $table->string('foto')->nullable();
            $table->integer('kategori')->length(2);
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
        Schema::dropIfExists('arraudahs');
    }
}
