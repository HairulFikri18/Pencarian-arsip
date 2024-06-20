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
            $table->string('uraian_informasi');
            $table->foreignId('id_kategori')->constrained('kategori__arsips')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_ruangans')->constrained('ruangans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_lemari')->constrained('lemaris')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_rak')->constrained('raks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_box')->constrained('boxes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('folder');
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
