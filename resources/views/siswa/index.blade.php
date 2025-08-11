<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5; /* Pink lembut */
            padding: 20px;
        }

        h1 {
            color: #d63384; /* Pink tua */
            margin-bottom: 20px;
            text-align: center;
        }

        a.btn {
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.2s;
            display: inline-block;
        }

        a.btn-add {
            background-color: #ff69b4; /* Hot pink */
            color: white;
        }

        a.btn-add:hover {
            background-color: #e75496;
        }

        a.btn-edit {
            background-color: #ffb6c1; /* Pink muda */
            color: #000;
        }

        a.btn-edit:hover {
            background-color: #ffa6b5;
        }

        a.btn-detail {
            background-color: #ff85a2; /* Pink coral */
            color: white;
        }

        a.btn-detail:hover {
            background-color: #e87491;
        }

        a.btn-delete {
            background-color: #ff4d6d; /* Pink merah */
            color: white;
        }

        a.btn-delete:hover {
            background-color: #e64561;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #ff69b4; /* Pink header */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #fff5f8;
        }

        tr:hover {
            background-color: #ffe6ef;
        }

        img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ff69b4;
        }
    </style>
</head> 
<body>
    <h1>📚 Data Siswa</h1>
    <a href="/siswa/create" class="btn btn-add">+ Tambah Siswa</a>
    <br><br>

    <table>
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
                <td><img src="{{ asset('storage/'.$siswa->photo) }}" alt=""></td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->clas->name }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->email }}</td>
                <td>
                    <a href="/siswa/edit/{{ $siswa->id }}" class="btn btn-edit">Edit</a>
                    <a href="/siswa/show/{{ $siswa->id }}" class="btn btn-detail">Detail</a>
                    <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-delete">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
