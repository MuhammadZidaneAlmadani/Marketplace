@extends('layouts.app')

@section('content')
    <h1>Daftar Pasar</h1>

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