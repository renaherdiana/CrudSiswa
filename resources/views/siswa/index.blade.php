<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head> 
<body>
    <h1>Data Siswa</h1>
    <a href="/siswa/create" style="padding: 6px 12px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; display: inline-block;">Tambah</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NISN</th>
                <th>Alamat</th>
                <th>Email</th>
                
                
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
                
            <td>
                <a href="/siswa/edit{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Edit</a>
                <a href="/siswa/show/{{ $siswa->id }}" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px; margin-right: 5px;">Detail</a>
                <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" style="padding: 5px 10px; text-decoration: none; border: 1px solid #aaa; border-radius: 4px;">Delete</a>
            </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
