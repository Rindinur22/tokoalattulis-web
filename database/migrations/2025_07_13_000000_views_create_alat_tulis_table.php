<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::statement("
            CREATE VIEW view_alat_tulis AS
            SELECT id, nama_alat, stok, jenis, created_at
            FROM alat_tulis
        ");
    }

    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS view_alat_tulis");
    }
};
