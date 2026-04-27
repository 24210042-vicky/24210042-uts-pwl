<!DOCTYPE html>
<html>

<head>
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3>Edit Dosen</h3>

        <form action="{{ url('dosen/'.$dosen->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" value="{{ $dosen->nama_dosen }}">
            </div>

            <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{ $dosen->alamat }}</textarea>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>