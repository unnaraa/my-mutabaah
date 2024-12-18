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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id(); // ID biodata
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->string('nama_lengkap'); // Nama lengkap pengguna
            $table->string('tempat_lahir'); // Tempat lahir pengguna (opsional)
            $table->date('tanggal_lahir'); // Tanggal lahir pengguna (opsional)
            $table->integer('umur'); // Umur pengguna 
            $table->longText('alamat'); // Alamat pengguna
            $table->integer('nomor_hp'); // Nomor HP pengguna
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->enum('kelas', ['lancar-tahsin','pemula']);
            $table->string('foto')->nullable();
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
