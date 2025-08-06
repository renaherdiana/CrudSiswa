<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head> 
<body>
    <h1>Data Siswa</h1>
    <a href="siswa/create"><button type="button">Tambah</button></a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NISN</th>
                <th>Alamat</th>
                <th>Email</th>
                
                <th>No Handphone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td><img src="{{ asset('storage/'.$siswa->photo) }}" alt="" width="40"></td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->clas->name }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->email }}</td>
                
                <td>{{ $siswa->no_handphone }}</td>
                <td>
                    <button>Edit</button>
                    <button>Hapus</button>
                    <button>Detail</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
