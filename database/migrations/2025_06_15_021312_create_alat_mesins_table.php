<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alat_mesins', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_alat');
            $table->string('jenis_barang');
            $table->string('nama_barang');
            $table->string('merk_type');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('kondisi');
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_mesins');
    }
};
