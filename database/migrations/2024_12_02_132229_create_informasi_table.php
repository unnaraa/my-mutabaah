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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id(); // ID informasi
            $table->string('judul'); // Judul informasi
            $table->text('isi'); // Isi informasi
            $table->dateTime('tanggal_mulai')->nullable(); // Waktu mulai berlaku
            $table->dateTime('tanggal_berakhir')->nullable(); // Waktu berakhir berlaku
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};
