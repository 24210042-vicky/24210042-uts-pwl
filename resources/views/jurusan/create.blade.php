<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Tambah Jurusan</h3>

    <form action="{{ url('jurusan') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kode Jurusan</label>
            <input type="text" name="kode_jurusan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_jurusan" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>