<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Sertifikat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Warna biru muda */
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .button {
            position: relative;
            top: 10px; /* Sesuaikan dengan kebutuhan */
        }
        h3 {
            color: #007bff; /* Warna biru tua */
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 4px;
            width: calc(100% - 22px);
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h10 {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            display: block;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Cek peserta X-code Training / X-code workshop / X-code seminar berdasarkan nomor sertifikat</h3>
        <form method="post" action="proses.php">
            <input type="text" name="search" placeholder="cari disini"><br>
            <input class="button" type="submit" name="submit" value="search">
        </form>
        <h10>Kode sertifikat untuk alumni X-code Training / workshop / seminar tahun 2021 atau di atasnya.
            Jika kode sertifikat tidak ditemukan maka bisa kontak Cyntia di nomor WA : 0858 0394 6032
            dengan menunjukkan scan atau potret sertifikat. Untuk kode sertifikat lama
            ada di <a href="https://xcode.co.id/cekkodesertifikatlama"
            target="_blank">Cek Kode Sertifikat lama</a></h10>
    </div>
</body>

