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
        Schema::create('data_profesis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_pribadi');
            $table->string('dokter');
            $table->string('spesialis')->nullable();
            $table->string('sub_spesialis')->nullable();
            $table->string('akademis');
            $table->timestamps();

            $table->foreign('id_pribadi')->references('id')->on('data_pribadis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_profesis');
    }
};