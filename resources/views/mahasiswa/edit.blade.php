<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Edit Data Mahasiswa</h3>

    <a href="{{ url('mahasiswa') }}" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'update'], $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control" value="{{ $mahasiswa->fullname }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="NIM" class="form-control" value="{{ $mahasiswa->NIM }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="NIDN" class="form-control" value="{{ $mahasiswa->NIDN }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $mahasiswa->tempat_lahir }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $mahasiswa->tanggal_lahir }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>

</body>
</html>