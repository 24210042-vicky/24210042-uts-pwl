<!DOCTYPE html>
<html>
<head>
    <title>Data Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Data Jurusan</h3>

    <a href="{{ url('jurusan/create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Kode Jurusan</th>
                <th>Ketua Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jurusan as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $j->nama_jurusan }}</td>
                <td>{{ $j->kode_jurusan }}</td>
                <td>{{ $j->ketua_jurusan }}</td>
                <td>
                    <a href="{{ url('jurusan/'.$j->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ url('jurusan/'.$j->id) }}" method="POST" style="display:inline;">
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