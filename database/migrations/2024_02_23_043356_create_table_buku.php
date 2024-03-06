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
        Schema::create('buku', function (Blueprint $table) {
        $table->id();
        $table->string('judul', 40);
        $table->string('penulis', 40);
        $table->string('penerbit', 40);
        $table->date('thn_terbit', 40);
        $table->string('deskripsi', 100);
        $table->enum('kategori', ['fiksi', 'nonfiksi']);
        $table->string('cover', 50);
        $table->integer('stok');
        $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
