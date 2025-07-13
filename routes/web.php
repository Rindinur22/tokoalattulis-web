<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatTulisController;

Route::get('/', function () {
    return redirect()->route('alat-tulis.index');
});

// TAMBAHKAN BINDING PARAMETER INI YANG MENYEBABKAN FITUR EDIT DAN DELETE GABISA
Route::resource('alat-tulis', AlatTulisController::class)->parameters([
    'alat-tulis' => 'alatTulis'
]);
