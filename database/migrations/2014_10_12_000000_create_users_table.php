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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('npaidi', 12)->unique;
            $table->string('nik')->uique();
            $table->string('nama_lengkap')->nullable();
            $table->string('no_telepon', 13)->nullable();
            $table->string('email')->nullable()->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ulangi_password');
            $table->string('lupa_password')->nullable();
            $table->enum('role', ['admin', 'dokter', 'user'])->default('user');            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};