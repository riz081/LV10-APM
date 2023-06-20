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
        // Relasi tabel kategori - user
        Schema::table('pengaduan', function(Blueprint $table){
            $table->foreign('kategori_id')->references('id')->on('kategoripengaduan')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('masyarakat_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });

        // Relasi tabel pengaduan - user
        Schema::table('tanggapan', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('pengaduan_id')->references('id')->on('pengaduan')->onUpdateCascade()->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
