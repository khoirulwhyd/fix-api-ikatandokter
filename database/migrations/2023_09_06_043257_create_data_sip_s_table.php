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
        Schema::create('data_sip_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('no_sip')->unique();
            $table->string('jenis_sarana');
            $table->string('nama_sarana');
            $table->string('hari_pelayanan');
            $table->string('waktu_pelayanan');
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt');
            $table->string('rw');
            $table->string('kode_pos');
            $table->string('alamat_lengkap');
            $table->string('mulai_berlaku');
            $table->string('akhir_berlaku');
            $table->string('scan_sip');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sip_s');
    }
};