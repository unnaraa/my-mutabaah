<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('mutabaah', function (Blueprint $table) {
        // Hapus foreign key lama
        $table->dropForeign(['user_id']);

        // Tambahkan foreign key baru dengan ON DELETE CASCADE
        $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->cascadeOnDelete();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mutabaah', function (Blueprint $table) {
            // Hapus foreign key dengan cascadeOnDelete
            $table->dropForeign(['user_id']);
    
            // Tambahkan kembali foreign key tanpa ON DELETE CASCADE
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }
    
};
