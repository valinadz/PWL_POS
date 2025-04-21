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
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id')->unsigned(); // ID user
            $table->unsignedBigInteger('level_id'); // Relasi ke tabel m_level
            $table->string('username', 20); // Username
            $table->string('nama', 100); // Nama lengkap
            $table->string('password'); // Password
            $table->timestamps(); // created_at, updated_at
        
            // Foreign Key
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
