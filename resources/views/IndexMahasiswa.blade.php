<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/saas/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div>
        <br>
        <table class="table table-striped table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td scope="row">{{$mahasiswa['id']}}</td>
                    <td>{{$mahasiswa['NIM']}}</td>
                    <td>{{$mahasiswa['name']}}</td>
                    <td>{{$mahasiswa['tempat_lahir']}}</td>
                    <td>{{$mahasiswa['tanggal_lahir']}}</td>
                    <td>{{$mahasiswa['jurusan']}}</td>
                    <td>{{$mahasiswa['angkatan']}}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mahasiswa['id']) }}">Edit</a>
                        <a href="{{ route('mahasiswa.delete', $mahasiswa['id']) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <table border=1 style="background-color: black;">
            <tr>
                <th style="color: white;">ID</th>
                <th style="color: white;">NIM</th>

            </tr>

            <tr>

            </tr>

        </table>
    </div>
</body>

</html>