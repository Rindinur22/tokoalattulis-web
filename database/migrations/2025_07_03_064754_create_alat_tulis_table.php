<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('alat_tulis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->integer('stok');
            $table->string('jenis')->nullable(); // jika ada jenis, tambahkan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alat_tulis');
    }
};
