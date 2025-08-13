<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
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

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ffc0cb;
            font-size: 14px;
            background-color: #fffafc;
        }

        input:focus, select:focus {
            border-color: #ff69b4; /* hot pink */
            outline: none;
            box-shadow: 0 0 5px rgba(255,105,180,0.5);
        }

        small {
            display: block;
            margin-top: 4px;
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
</head>
<body>

    <div class="container">
        <h1>Tambah Data Siswa</h1>

        <form action="/siswa/store" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="photo">Photo</label>
                <input type="file" name="photo">
            </div>

            <div>
                <label for="name">Nama</label>
                <input type="text" name="name">
                @error('name')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="kelas">Kelas</label>
                <select name="kelas_id">
                    @foreach($clases as $clas)
                        <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="nisn">NISN</label>
                <input type="text" name="nisn">
                @error('nisn')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat">
                @error('alamat')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email">
                @error('email')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
                @error('password')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="no_handphone">No Handphone</label>
                <input type="text" name="no_handphone">
                @error('no_handphone')
                    <small style="color: #FF0000">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit">Simpan</button>
        </form>

        <a href="/" class="back-btn">Kembali</a>
    </div>

</body>
</html>
