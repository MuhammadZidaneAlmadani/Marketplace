@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Teras Pasar</h2>
    <a href="{{ route('teras-pasar.admin.create') }}" class="btn btn-primary mb-3">Tambah Teras Pasar</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($terasPasar as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_toko }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="{{ route('teras-pasar.admin.show', $item->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('teras-pasar.admin.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('teras-pasar.admin.destroy', $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
