<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Edit Jurusan</h3>

    <form action="{{ url('jurusan/'.$jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}">
        </div>

        <div class="mb-3">
            <label>Kode Jurusan</label>
            <input type="text" name="kode_jurusan" class="form-control" value="{{ $jurusan->kode_jurusan }}">
        </div>

        <div class="mb-3">
            <label>Ketua Jurusan</label>
            <input type="text" name="ketua_jurusan" class="form-control" value="{{ $jurusan->ketua_jurusan }}">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>