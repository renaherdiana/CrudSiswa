<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5; 
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(255, 105, 180, 0.2);
            border: 2px solid #ffb6c1;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #d63384; 
        }

        .profile-img {
            display: block;
            margin: 0 auto 20px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ff69b4;
            box-shadow: 0 4px 10px rgba(255, 105, 180, 0.4);
        }

        .info-item {
            margin: 14px 0;
            font-size: 16px;
            color: #555;
            border-bottom: 1px solid #ffe4ec;
            padding-bottom: 6px;
        }

        .label {
            font-weight: bold;
            color: #d63384;
        }

        .back-btn {
            text-align: center;
            margin-top: 30px;
        }

        .back-btn a {
            display: inline-block;
            padding: 10px 24px;
            background-color: #ff69b4;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.3);
        }

        .back-btn a:hover,
        .back-btn a:focus {
            background-color: #e754a7;
            transform: scale(1.05);
        }

        .back-btn a:visited {
            color: #fff; 
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Detail Siswa</h1>
        <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa" class="profile-img">
        <div class="info-item"><span class="label">Nama:</span> {{ $datauser->name }}</div>
        <div class="info-item"><span class="label">Kelas:</span> {{ $datauser->clas->name }}</div>
        <div class="info-item"><span class="label">NISN:</span> {{ $datauser->nisn }}</div>
        <div class="info-item"><span class="label">Alamat:</span> {{ $datauser->alamat }}</div>
        <div class="info-item"><span class="label">Email:</span> {{ $datauser->email }}</div>
        <div class="info-item"><span class="label">No HP:</span> {{ $datauser->no_handphone }}</div>

        <div class="back-btn">
            <a href="/">← Kembali</a>
        </div>
    </div>

</body>
</html>
