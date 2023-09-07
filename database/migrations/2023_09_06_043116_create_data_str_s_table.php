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
        Schema::create('data_str_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pribadi');
            $table->string('no_str')->unique();
            $table->string('scan_str');
            $table->timestamps();

            $table->foreign('id_pribadi')->references('id')->on('data_pribadis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_str_s');
    }
};