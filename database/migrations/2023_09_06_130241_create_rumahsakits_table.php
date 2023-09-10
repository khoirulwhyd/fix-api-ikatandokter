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
        Schema::create('rumahsakits', function (Blueprint $table) {
            $table->string('kode')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('layanan_pembayaran');
            $table->string('hari_pelayanan');
            $table->string('kecamatan');
            $table->string('tipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumahsakits');
    }
};