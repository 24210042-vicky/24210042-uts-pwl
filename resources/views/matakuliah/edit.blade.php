<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow rounded-4">
        <div class="card-body">
            <h3 class="fw-bold mb-4">Edit Mata Kuliah</h3>

            <form action="{{ url('matakuliah/'.$matakuliah->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul" class="form-control" value="{{ $matakuliah->nama_matkul }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kode_matkul" class="form-control" value="{{ $matakuliah->kode_matkul }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number" name="sks" class="form-control" value="{{ $matakuliah->sks }}">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="{{ url('matakuliah') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>