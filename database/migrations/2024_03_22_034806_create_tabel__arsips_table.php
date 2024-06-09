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
        Schema::create('tabel__arsips', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klasifikasi');
            $table->string('jenis_arsip');
            $table->foreignId('id_kategori')->constrained('kategori__arsips')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('uraian_informasi');
            $table->string('nama_ruang');
            $table->string('nomor_rak');
            $table->string('nomor_box');
            $table->string('nomor_folder');
            $table->string('jumlah_berkas');
            $table->string('tanggal');
            $table->string('file');
            
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
        Schema::dropIfExists('tabel__arsips');
    }
};
