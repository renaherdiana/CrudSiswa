@extends('layouts.app')
@section('css')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f8;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background: linear-gradient(90deg, #ff69b4, #ff85a2);
            padding: 15px 30px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: 500;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background-color 0.3s, transform 0.2s;
        }

        header nav a:hover {
            background-color: rgba(255,255,255,0.2);
            transform: scale(1.05);
        }

        /* Container */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.05);
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Button */
        .btn {
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.25s ease-in-out;
            display: inline-block;
        }

        .btn-add {
            background-color: #ff69b4;
            color: white;
            box-shadow: 0 3px 6px rgba(255,105,180,0.3);
        }

        .btn-add:hover {
            background-color: #e75496;
            transform: translateY(-2px);
        }

        .btn-edit {
            background-color: #ffb6c1;
            color: #000;
        }

        .btn-edit:hover {
            background-color: #ffa6b5;
            transform: translateY(-2px);
        }

        .btn-detail {
            background-color: #ff85a2;
            color: white;
        }

        .btn-detail:hover {
            background-color: #e87491;
            transform: translateY(-2px);
        }

        .btn-delete {
            background-color: #ff4d6d;
            color: white;
        }

        .btn-delete:hover {
            background-color: #e64561;
            transform: translateY(-2px);
        }

        /* Table */
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
            background: linear-gradient(90deg, #ff69b4, #ff85a2);
            color: white;
            font-weight: 600;
        }

        tr {
            transition: background-color 0.25s;
        }

        tr:nth-child(even) {
            background-color: #fff0f5;
        }

        tr:hover {
            background-color: #ffe6ef;
        }

        img {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ff69b4;
            transition: transform 0.2s;
        }

        img:hover {
            transform: scale(1.1);
        }
    </style>
    @endsection


     @section('content')
    <header>
        <div>📚 Data Siswa</div>
        <nav>
            <a href="{{ route('siswa.index') }}">Menu Siswa</a>
            <a href="{{ route('clas.index') }}">Menu Kelas</a>
        </nav>
    </header>

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
                    <td>{{ $siswa->clas?->name }}</td>
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
@endsection
