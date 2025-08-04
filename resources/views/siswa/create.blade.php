<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>
<body>

    <h1>Halaman Tambah</h1><br>

    <form action="/siswa/store" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="photo">Photo</label><br>
            <input type="file" name="photo">
        </div><br>

        <div>
            <label for="name">Nama:</label><br>
            <input type="text" name="name"><br>
            @error('name')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="kelas">Kelas PPLG</label><br>
            <select name="kelas_id">
                <option value="1">XII PPLG 1</option>
                <option value="2">XII PPLG 2</option>
                <option value="3">XII PPLG 3</option>
            </select><br>
            @error('kelas_id')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="nisn">NISN:</label><br>
            <input type="text" name="nisn"><br>
            @error('nisn')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="alamat">Alamat:</label><br>
            <input type="text" name="alamat"><br>
            @error('alamat')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label><br>
            <input type="text" name="email"><br>
            @error('email')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password"><br>
            @error('password')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="no_handphone">No Handphone:</label><br>
            <input type="text" name="no_handphone"><br>
            @error('no_handphone')
                <small style="color: #FF0000">{{ $message }}</small>
            @enderror
        </div><br>

        <button type="submit">Simpan</button><br>
    </form>

    <br>
    <a href="/"><button>Kembali</button></a>

</body>
</html>
