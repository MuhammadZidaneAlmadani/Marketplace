@extends('admin.layouts.app')

@section('title', 'Kelola Pasar')

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="font-weight-bold">KELOLA PASAR</h1>
        <p class="lead">Di sini Anda dapat mengelola data pasar di Pamekasan.</p>
        <a href="{{ route('markets.admin.create') }}" class="btn btn-primary">Tambah Pasar Baru</a>
    </div>

    <!-- Pencarian -->
    <form method="GET" action="{{ route('markets.admin.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Pasar..." value="{{ $query ?? '' }}">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </div>
    </form>

    <!-- Daftar Pasar -->
    <div class="row">
        @forelse ($markets as $market)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ $market->foto_utama ? asset('storage/' . $market->foto_utama) : asset('images/default.jpg') }}" class="card-img-top" alt="{{ $market->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $market->nama }}</h5>
                        <p class="text-muted">{{ \Illuminate\Support\Str::limit($market->deskripsi, 100) }}</p>
                        <a href="{{ route('markets.admin.show', $market->id) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                        <a href="{{ route('markets.admin.edit', $market->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('markets.admin.destroy', $market->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada data pasar.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $markets->links() }}
    </div>
</div>
@endsection
