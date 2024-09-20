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
            max-width: 800px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #007bff;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        td {
            background-color: #f9f9f9;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        p.note {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Cek Nomor Sertifikat Peserta <br> X-code Training | X-code workshop | X-code seminar</h3>
        <form method="post" action="proses.php">
            <input type="text" name="search" placeholder="Masukan kode sertifikat">
            <input class="button" type="submit" name="submit" value="Cari">
        </form>
        <p class="note">Kode sertifikat untuk alumni X-code Training / workshop / seminar tahun 2021 atau di atasnya. Jika kode sertifikat tidak ditemukan maka bisa kontak Cyntia di nomor WA: 0858 0394 6032 dengan menunjukkan scan atau potret sertifikat. Untuk kode sertifikat lama ada di <a href="https://xcode.co.id/cekkodesertifikatlama" target="_blank">Cek Kode Sertifikat lama</a></p>

        <table>
            <tr>
                <th>Nomor</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Program</th>
                <th>Keterangan</th>
                <th>Link untuk post ke sertifikat ke LinkedIn</th>
            </tr>
            <?php
                include 'koneksi.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $search = trim($_POST['search']);
                    if (!empty($search)) {
                        $stmt = $koneksi->prepare("SELECT id_alumni,kode,nama,program,keterangan FROM daftaralumni WHERE kode = ?");
                        $stmt->bind_param("s", $search);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while ($data = mysqli_fetch_row($result)) {

                            $id_alumni=$data[0];
                            $kode=$data[1];
                            $nama=$data[2];
                            $program=$data[3];
                            $keterangan=$data[4];

                                echo "<tr>
                                    <td>$id_alumni</td>
                                    <td>$kode</td>
                                    <td>$nama</td>
                                    <td>$program</td>
                                    <td>$keterangan</td>
                                    <td><a href='https://www.linkedin.com/profile/add?startTask=&name=$program&organizationName=X-code (PT. Teknologi Server Indonesia)&issueYear=&issueMonth=&expirationYear=&expirationMonth=&certUrl=https://xcode.co.id/cekkodesertifikat&certId=$kode' target='_blank'>Link LinkedIn</a></td>
                                </tr>";
                        }
                        $stmt->close();
                    } else echo ('Maaf, sertifikat tidak tersedia ');
                }
            ?>
        </table>
    </div>
</body>
</html>
<?php
                                    // $q = mysqli_query($koneksi, "SELECT nik,dt_user,tipe_user,email,no_hp,username FROM user ORDER BY tipe_user ASC, dt_user ASC");
                                    // while ($d = mysqli_fetch_row($q)) {

                                    //     $nik = $d[0];
                                    //     $dt_user = $d[1];
                                    //     $tipe_user = $d[2];
                                    //     $email = $d[3];
                                    //     $no_hp = $d[4];
                                    //     echo "<tr>

                                    //             <td>$nik</td>
                                    //             <td>$dt_user</td>
                                    //             <td>$tipe_user</td>
                                    //             <td>$email</td>
                                    //             <td>$no_hp</td>
                                    //             <td>
                                    //                 <a href=index.php?p=user_edit&nik=$nik><button type=button class=\"btn btn-outline-success btn-sm\" onclick>Ubah</button></a>
                                    //                 <button type=button class=\"btn btn-outline-warning btn-sm\" data-bs-toggle=modal data-bs-target=#myModal data-nik=$nik>Hapus</button>
                                    //             </td>
                                    //         </tr>";
                                    // }
                                    //
