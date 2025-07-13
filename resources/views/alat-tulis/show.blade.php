@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Produk</h2>

    <div class="card">
        <div class="card-body">
            <h4>{{ $alatTulis->nama }}</h4>
            <p>Kategori: {{ $alatTulis->kategori }}</p>
            <p>Harga: Rp{{ number_format($alatTulis->harga) }}</p>
            <p>Stok: {{ $alatTulis->stok }}</p>
            <p>Deskripsi: {{ $alatTulis->deskripsi }}</p>

            @if($alatTulis->gambar)
                <img src="{{ asset('images/' . $alatTulis->gambar) }}" alt="Gambar Produk" width="200">
            @endif

            <br><br>
            <a href="{{ route('alat-tulis.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
