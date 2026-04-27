<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Data Mahasiswa</h3>

    <!-- Tombol Create -->
    <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary mb-3">
        + Tambah Data
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>NIDN</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Tanggal Pembuatan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->fullname }}</td>
                <td>{{ $m->NIM }}</td>
                <td>{{ $m->NIDN }}</td>
                <td>{{ $m->tempat_lahir }}, {{ $m->tanggal_lahir }}</td>
                <td>{{ $m->alamat }}</td>
                <td>{{ $m->created_at }}</td>

                <td>
                    <!-- Edit -->
                    <a href="{{ url('mahasiswa/'.$m->id.'/edit') }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ url('mahasiswa/'.$m->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>