@extends('layouts.app')

@section('title', 'Edit Alat Tulis')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-gradient text-white">
                <h4 class="mb-0">
                    <i class="fas fa-edit"></i> Edit Produk: {{ $alatTulis->nama }}
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('alat-tulis.update', $alatTulis) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Produk *</label>
                                <input type="text" 
                                       class="form-control @error('nama') is-invalid @enderror" 
                                       id="nama" 
                                       name="nama" 
                                       value="{{ old('nama', $alatTulis->nama) }}" 
                                       required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori *</label>
                                <select class="form-select @error('kategori') is-invalid @enderror" 
                                        id="kategori" 
                                        name="kategori" 
                                        required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Pulpen" {{ old('kategori', $alatTulis->kategori) == 'Pulpen' ? 'selected' : '' }}>Pulpen</option>
                                    <option value="Pensil" {{ old('kategori', $alatTulis->kategori) == 'Pensil' ? 'selected' : '' }}>Pensil</option>
                                    <option value="Penggaris" {{ old('kategori', $alatTulis->kategori) == 'Penggaris' ? 'selected' : '' }}>Penggaris</option>
                                    <option value="Penghapus" {{ old('kategori', $alatTulis->kategori) == 'Penghapus' ? 'selected' : '' }}>Penghapus</option>
                                    <option value="Buku Tulis" {{ old('kategori', $alatTulis->kategori) == 'Buku Tulis' ? 'selected' : '' }}>Buku Tulis</option>
                                    <option value="Kertas" {{ old('kategori', $alatTulis->kategori) == 'Kertas' ? 'selected' : '' }}>Kertas</option>
                                    <option value="Spidol" {{ old('kategori', $alatTulis->kategori) == 'Spidol' ? 'selected' : '' }}>Spidol</option>
                                    <option value="Stapler" {{ old('kategori', $alatTulis->kategori) == 'Stapler' ? 'selected' : '' }}>Stapler</option>
                                    <option value="Lainnya" {{ old('kategori', $alatTulis->kategori) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga *</label>
                                <div class="input-group