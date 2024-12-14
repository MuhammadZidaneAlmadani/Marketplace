@extends('pengunjung.home')

@section('title', 'Daftar Pasar')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Daftar Pasar</h2>
    <a href="/markets_admin" class="btn btn-primary mb-3">Tambah Pasar Baru</a>
    @if($markets->isEmpty())
        <p class="text-center">Tidak ada pasar yang tersedia.</p>
    @else
        <ul class="list-group">
            @foreach($markets as $market)
                <li class="list-group-item d-flex align-items-center">
                    {{-- Menampilkan Foto Utama Jika Ada --}}
                    @if($market->foto_utama)
                        <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="{{ $market->nama }}" class="img-thumbnail me-3" width="100">
                    @endif
                    <a href="{{ route('markets.show', $market->id) }}" class="flex-grow-1">{{ $market->nama }}</a>
                    <a href="{{ route('markets.edit', $market->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                    <form action="{{ route('markets.destroy', $market->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
