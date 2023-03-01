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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('usia')->nullable();
            $table->string('email')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('phone')->nullable();
            $table->string('daftar_diklat_id')->nullable();
            $table->string('ijazah_id')->nullable();
            $table->string('kartu_keluarga_id')->nullable();
            $table->string('ktp_id')->nullable();
            $table->string('foto_3x3_id')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
};
