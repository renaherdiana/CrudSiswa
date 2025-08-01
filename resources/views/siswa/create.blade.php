<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>

    <div>
        <h2>Tambah Data Siswa</h2>

        <div>
            <form action="{{ url('siswa/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <table cellpadding="8" cellspacing="0" border="0">
                        <tr>
                            <td><label>Foto</label></td>
                            <td><input type="file" name="foto"></td>
                        </tr>
                        <tr>
                            <td><label>Nama</label></td>
                            <td><input type="text" name="nama" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td>
                                <select name="kelas_id" required>
                                    <option value="1">XII PPLG 1</option>
                                    <option value="2">XII PPLG 2</option>
                                    <option value="3">XII PPLG 3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>NISN</label></td>
                            <td><input type="text" name="nisn" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td><input type="text" name="alamat" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="email" name="email" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" name="password" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label>No Handphone</label></td>
                            <td><input type="tel" name="no_handphone" size="40" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit">Simpan</button>
                                <button type="reset">Reset</button>
                                <a href="/"><button type="button">Kembali</button></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
