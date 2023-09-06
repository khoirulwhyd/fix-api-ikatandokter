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
            $table->unsignedBigInteger('id_pribadi');
            $table->string('no_sip');
            $table->string('scan_sip');
            $table->timestamps();
            
            $table->foreign('id_pribadi')->references('id')->on('data_pribadis')->onDelete('cascade');
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