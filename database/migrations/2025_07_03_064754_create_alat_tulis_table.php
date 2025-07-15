<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('alat_tulis', function (Blueprint $table) {
            $table->id();
$table->string('nama'); // Ganti ini agar cocok dengan form
$table->string('kategori');
$table->integer('harga');
$table->integer('stok');
$table->text('deskripsi')->nullable();
$table->string('gambar')->nullable();
$table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alat_tulis');
    }
};
