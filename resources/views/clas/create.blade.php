@extends('layouts.app')
@section('css')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5; /* pink muda */
            padding: 40px;
        }

        .container {
            max-width: 600px;
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
            color: #d63384; /* pink tua */
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #d63384;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ffc0cb;
            font-size: 14px;
            background-color: #fffafc;
        }

        input:focus, textarea:focus {
            border-color: #ff69b4; /* hot pink */
            outline: none;
            box-shadow: 0 0 5px rgba(255,105,180,0.5);
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
        }

        button:hover {
            background-color: #d63384;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 15px;
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
        <h1>Tambah Kelas</h1>

        <form action="{{ route('clas.store') }}" method="POST">
            @csrf

            <div>
                <label for="name">Nama Kelas</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" placeholder="Tambahkan deskripsi kelas..."></textarea>
            </div>

            <button type="submit">Simpan</button>
        </form>

        <a href="{{ route('clas.index') }}" class="back-btn">Kembali</a>
    </div>
@endsection

