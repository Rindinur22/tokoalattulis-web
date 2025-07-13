@extends('layouts.app')

@section('title', 'Daftar Alat Tulis')

@section('content')
<div class="row mb-4">
    <div class="col-md-8">
        <h1 class="text-gradient">
            <i class="fas fa-clipboard-list"></i> Daftar Alat Tulis
        </h1>
        <p class="text-muted">Kelola inventori toko alat tulis Anda</p>
    </div>
    <div class="col-md-4 text-end">
        <a href="{{ route('alat-tulis.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
</div>

@if($alatTulis->count() > 0)
    <div class="row">
        @foreach($alatTulis as $item)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    @if($item->gambar)
                        <img src="{{ asset('images/' . $item->gambar) }}" 
                             class="card-img-top product-img" 
                             alt="{{ $item->nama }}">
                    @else
                        <div class="card-img-top bg-gradient d-flex align-items-center justify-content-center" 
                             style="height: 200px;">
                            <i class="fas fa-image text-white fa-3x"></i>
                        </div>
                    @endif
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-tag"></i> {{ $item->kategori }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted">{{ Str::limit($item->deskripsi, 100) }}</small>
                        </p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </span>
                                <span class="badge bg-success">
                                    <i class="fas fa-box"></i> {{ $item->stok }}
                                </span>
                            </div>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('alat-tulis.show', $item) }}" 
                                   class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('alat-tulis.edit', $item) }}" 
                                   class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" 
                                        class="btn btn-outline-danger" 
                                        onclick="confirmDelete({{ $item->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $alatTulis->links() }}
    </div>
@else
    <div class="text-center py-5">
        <i class="fas fa-clipboard-list fa-5x text-muted mb-3"></i>
        <h3 class="text-muted">Belum ada produk</h3>
        <p class="text-muted">Tambahkan produk alat tulis pertama Anda</p>
        <a href="{{ route('alat-tulis.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
@endif

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus produk ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function confirmDelete(id) {
    const form = document.getElementById('deleteForm');
    form.action = `/alat-tulis/${id}`;
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
}
</script>
@endsection