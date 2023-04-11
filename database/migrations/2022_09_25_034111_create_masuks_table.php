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
            $table->string('nama');
            $table->string('nomor');
            $table->string('pengirim');
            $table->string('tanggal');
            $table->string('lamp');
            $table->string('prihal');
            $table->string('alamat');
            $table->string('keterangan');
            $table->string('pdf');
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
