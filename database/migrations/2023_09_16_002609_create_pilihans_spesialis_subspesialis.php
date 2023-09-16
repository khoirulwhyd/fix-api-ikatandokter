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
        Schema::create('pilihans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('spesialis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('pilihan_id');
            $table->timestamps();
        });
        Schema::create('subspesialis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('spesialis_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilihans');
        Schema::dropIfExists('spesialis');
        Schema::dropIfExists('subspesialis');
    }
};
