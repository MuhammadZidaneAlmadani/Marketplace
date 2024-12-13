@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Teras Pasar</h2>

    <form action="{{ route('teras-pasar.admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_toko">Nama Toko</label>
            <input type="text" id="nama_toko" name="nama_toko" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="digitalisasi_data">Digitalisasi Data</label>
            <select id="digitalisasi_data" name="digitalisasi_data" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pembayaran_retribusi_elektronik">Pembayaran Retribusi Elektronik</label>
            <select id="pembayaran_retribusi_elektronik" name="pembayaran_retribusi_elektronik" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('teras-pasar.admin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection