<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>

    <h2>Tambah Data Siswa</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <table cellpadding="8" cellspacing="0" border="0">
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama" size="40" required></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <select name="kelas_id" id="kelas" required>
                        <option value="XII PPLG 1">XII PPLG 1</option>
                        <option value="XII PPLG 2">XII PPLG 2</option>
                        <option value="XII PPLG 3">XII PPLG 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="nisn">NISN</label></td>
                <td><input type="text" name="nisn" id="nisn" size="40" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" name="alamat" id="alamat" size="40" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" size="40" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" size="40" required></td>
            </tr>
            <tr>
                <td><label for="no_handphone">No Handphone</label></td>
                <td><input type="text" name="no_handphone" id="no_handphone" size="40" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="reset">Reset</button>
                    <a href="/"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
