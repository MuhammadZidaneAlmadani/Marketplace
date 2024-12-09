<form action="{{ route('markets.admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Pasar</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" name="lokasi" id="lokasi" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="tanggal_pendirian">Tanggal Pendirian</label>
        <input type="date" name="tanggal_pendirian" id="tanggal_pendirian" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="foto_utama">Foto Utama</label>
        <input type="file" name="foto_utama" id="foto_utama" class="form-control">
    </div>

    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="latitude" class="form-control">
    </div>

    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="longitude" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
