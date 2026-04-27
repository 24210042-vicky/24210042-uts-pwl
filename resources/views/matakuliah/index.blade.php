<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Data Mata Kuliah</h3>

        <!-- Tombol Create -->
        <a href="{{ url('matakuliah/create') }}" class="btn btn-primary mb-3">
            + Tambah Data
        </a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Kode Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($matakuliah as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->nama_matkul }}</td>
                    <td>{{ $m->kode_matkul }}</td>
                    <td>{{ $m->sks }}</td>

                    <td>
                        <!-- Edit -->
                        <a href="{{ url('matakuliah/'.$m->id.'/edit') }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <!-- Delete -->
                        <form action="{{ url('matakuliah/'.$m->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($matakuliah->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Data tidak tersedia</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</body>
</html>