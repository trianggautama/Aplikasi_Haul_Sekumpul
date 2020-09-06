<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedbigInteger('posko_id')->nullable();
            $table->string('nama', 50);
            $table->string('username', 50);
            $table->string('password', 150);
            $table->string('no_hp', 13);
            $table->tinyInteger('role')->default(1);
            $table->string('foto', 100);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
