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
    Schema::create('artikel', function (Blueprint $table) 
    {
        $table->id(); // ID artikel
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
        $table->string('sumber'); // sumber artikel
        $table->string('judul'); // Judul artikel
        $table->text('img'); // gambar artikel
        $table->text('link'); // link artikel
        $table->string('kategori')->nullable(); // Kategori artikel (opsional)
        $table->timestamps(); // Kolom created_at dan updated_at
    });  

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
