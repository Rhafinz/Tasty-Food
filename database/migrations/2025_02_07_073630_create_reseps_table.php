<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_resep');
            $table->text('deskripsi')->nullable();
            $table->text('bahan');
            $table->text('langkah');
            $table->string('gambar')->nullable();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->ondelete('cascade');
            $table->bigInteger('ratings_id')->unsigned();
            $table->foreign('ratings_id')->references('id')->on('ratings')->ondelete('cascade');
            $table->string('slug')->unique(); // Menambahkan kolom slug
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
