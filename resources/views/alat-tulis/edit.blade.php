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
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" 
                                           class="form-control @error('harga') is-invalid @enderror" 
                                           id="harga" 
                                           name="harga" 
                                           value="{{ old('harga', $alatTulis->harga) }}" 
                                           min="0" 
                                           step="0.01" 
                                           required>
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok *</label>
                                <input type="number" 
                                       class="form-control @error('stok') is-invalid @enderror" 
                                       id="stok" 
                                       name="stok" 
                                       value="{{ old('stok', $alatTulis->stok) }}" 
                                       min="0" 
                                       required>
                                @error('stok')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                  id="deskripsi" 
                                  name="deskripsi" 
                                  rows="3" 
                                  placeholder="Masukkan deskripsi produk...">{{ old('deskripsi', $alatTulis->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Produk</label>
                        <input type="file" 
                               class="form-control @error('gambar') is-invalid @enderror" 
                               id="gambar" 
                               name="gambar" 
                               accept="image/*" 
                               onchange="previewImage(this)">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB. Biarkan kosong jika tidak ingin mengubah gambar.</div>
                        
                        <div id="imagePreview" class="mt-2" 
                             @if(!$alatTulis->gambar) style="display: none;" @endif>
                            <img id="preview" 
                                 src="{{ $alatTulis->gambar ? asset('images/' . $alatTulis->gambar) : '#' }}" 
                                 alt="Preview" 
                                 class="img-thumbnail" 
                                 style="max-width: 200px;">
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('alat-tulis.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Perbarui Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function previewImage(input) {
    const preview = document.getElementById('preview');
    const previewDiv = document.getElementById('imagePreview');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewDiv.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        // If no new file is selected, revert to the existing image or hide if none
        @if($alatTulis->gambar)
            preview.src = "{{ asset('images/' . $alatTulis->gambar) }}";
            previewDiv.style.display = 'block';
        @else
            previewDiv.style.display = 'none';
        @endif
    }
}
</script>
@endsection