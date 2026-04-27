<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Data Dosen</h3>

    <a href="{{ url('dosen/create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dosen as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama_dosen }}</td>
                <td>{{ $d->nip }}</td>
                <td>{{ $d->alamat }}</td>
                <td>
                    <a href="{{ url('dosen/'.$d->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ url('dosen/'.$d->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>