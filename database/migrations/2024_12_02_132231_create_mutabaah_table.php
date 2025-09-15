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
        Schema::create('mutabaah', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('tanggal'); 
            $table->foreignId('surah_id')->constrained('surah');  
            $table->integer('ayat_mulai');
            $table->integer('ayat_akhir');
            $table->integer('juz');
            $table->enum('status', ['ziyadah','murojaah']);
            $table->text('desc')->nullable(); 
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutabaah');
    }
};
