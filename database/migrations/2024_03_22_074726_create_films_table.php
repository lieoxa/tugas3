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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('Thumbnail');
            $table->string('Video');
            $table->string('Judul');
            $table->string('Tahun');
            $table->string('Usia');
            $table->string('Durasi');
            $table->string('Perusahaan');
            $table->string('Sutradara');
            $table->string('Deskripsi');
            $table->string('Kategori');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
