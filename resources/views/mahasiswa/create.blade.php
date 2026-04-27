<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Tambah Data Mahasiswa</h3>

    <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'store']) }}" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="NIM" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="NIDN" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Tambah</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>

</body>
</html>