<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kodesm')->unique();
            $table->foreignId('user_id');
            $table->string('nama')->nullable();
            $table->string('nomor')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('lamp')->nullable();
            $table->string('prihal')->nullable();
            $table->string('alamat')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('masuks');
    }
};
