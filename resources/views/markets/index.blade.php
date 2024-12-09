@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1>Daftar Pasar</h1>
=======
    <h2>Daftar Pasar</h2>
    <a href="/markets_admin">Tambah Pasar Baru</a>
    <ul>
        @foreach($markets as $market)
            <li>
                {{-- Menampilkan Foto Utama Jika Ada --}}
                @if($market->foto_utama)
                    <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="{{ $market->nama }}" class="img-thumbnail" width="100">
                @endif
>>>>>>> 3d5000a0f2921cf7a8d81acf49579efd65777891

    @if($markets->isEmpty())
        <p>Tidak ada pasar yang tersedia.</p>
    @else
        <ul>
            @foreach($markets as $market)
                <li>
                    @if($market->foto_utama)
                        <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="{{ $market->nama }}" class="img-thumbnail" width="100">
                    @endif
                    <a href="{{ route('markets.show', $market->id) }}">{{ $market->nama }}</a>
                    <a href="{{ route('markets.edit', $market->id) }}">Edit</a>
                    <form action="{{ route('markets.destroy', $market->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection