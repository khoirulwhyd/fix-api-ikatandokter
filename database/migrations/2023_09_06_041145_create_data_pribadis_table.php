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
        Schema::create('data_pribadis', function (Blueprint $table) {
            $table->id();
            $table->integer('npaidi')->unique();
            $table->string('no_identitas')->unique();
            $table->string('nama_lengkap');
            $table->string('foto_diri')->nullable();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('kewarganegaraan');
            $table->string('agama');
            $table->string('nama_pasangan');
            $table->string('ktp_provinsi');
            $table->string('ktp_kabupaten/kota');
            $table->string('ktp_kecamatan');
            $table->string('ktp_kelurahan');
            $table->string('ktp_rt');
            $table->string('ktp_rw');
            $table->string('ktp_kodepos');
            $table->string('ktp_alamat_lengkap');
            $table->string('no_teleponrumah', 13);
            $table->string('no_hp', 13);
            $table->string('no_hp2', 13)->nullable();
            $table->string('krsp_provinsi');
            $table->string('krsp_kabupaten/kota');
            $table->string('krsp_kecamatan');
            $table->string('krsp_kelurahan');
            $table->string('krsp_rt');
            $table->string('krsp_rw');
            $table->string('krsp_kodepos');
            $table->string('krsp_alamat_lengkap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pribadis');
    }
};