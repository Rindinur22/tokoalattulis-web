Schema::create('alat_tulis', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('kategori');
    $table->decimal('harga', 10, 2);
    $table->integer('stok');
    $table->text('deskripsi')->nullable();
    $table->string('gambar')->nullable();
    $table->timestamps();
});
