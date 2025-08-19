@extends('layouts.app')
@section('css')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: 2px solid #ffc0cb;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #d63384;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            color: #d63384;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ffc0cb;
            text-align: left;
        }

        th {
            background-color: #ffb6c1;
        }

        tr:nth-child(even) {
            background-color: #fff0f5;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #d63384;
            font-weight: bold;
        }

        .back-btn:hover {
            color: #ff69b4;
        }
    </style>
    @endsection

@section('content')
<div class="container">
    <h1>Detail Kelas</h1>

    {{-- Cek dulu apakah $class ada --}}
    @if($class)
        <p><span class="label">Nama Kelas:</span> {{ $class->name ?? 'Belum ada nama kelas' }}</p>
        <p><span class="label">Deskripsi:</span> {{ $class->description ?? '-' }}</p>

        <h2>Daftar Siswa</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
            <tbody>
                {{-- Cek apakah ada siswa --}}
                @forelse($class->users ?? [] as $user)
                <tr>
                    <td>{{ $user->name ?? '-' }}</td>
                    <td>{{ $user->nisn ?? '-' }}</td>
                    <td>{{ $user->email ?? '-' }}</td>
                    <td>{{ $user->no_handphone ?? '-' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align:center;">Belum ada siswa di kelas ini</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    @else
        <p>Data kelas belum tersedia.</p>
    @endif

    <a href="{{ route('clas.index') }}" class="back-btn">Kembali</a>
</div>
@endsection

