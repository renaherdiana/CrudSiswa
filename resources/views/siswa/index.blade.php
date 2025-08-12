<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ff69b4;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .btn {
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            display: inline-block;
        }

        .btn-add {
            background-color: #ff69b4;
            color: white;
        }

        .btn-add:hover {
            background-color: #e75496;
        }

        .btn-edit {
            background-color: #ffb6c1;
            color: #000;
        }

        .btn-edit:hover {
            background-color: #ffa6b5;
        }

        .btn-detail {
            background-color: #ff85a2;
            color: white;
        }

        .btn-detail:hover {
            background-color: #e87491;
        }

        .btn-delete {
            background-color: #ff4d6d;
            color: white;
        }

        .btn-delete:hover {
            background-color: #e64561;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            text-align: left;
        }

        th {
            background-color: #ff69b4;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #fff0f5;
        }

        tr:hover {
            background-color: #ffe6ef;
            transition: 0.2s;
        }

        img {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ff69b4;
        }
    </style>
</head>
<body>

    <header>📚 Data Siswa</header>

    <div class="container">
        <a href="/siswa/create" class="btn btn-add">+ Tambah Siswa</a>

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
    </div>

</body>
</html>
