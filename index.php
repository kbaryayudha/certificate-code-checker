<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/idx.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'layout/h_idx.html'; ?>

    <main>
        <div class="card">
            <div class="table">
                <h2>Daftar Alumni X-Code Training</h2>
                <div class="table_header">
                    <input type="text" placeholder="Cari data disini">
                    <button class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE</th>
                                <th>NAMA</th>
                                <th>PROGRAM</th>
                                <th>KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>Haaland</td>
                                <td>Cyber Security</td>
                                <td>Lulus</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td>Haaland</td>
                                <td>Cyber Security</td>
                                <td>Lulus</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td>Haaland</td>
                                <td>Cyber Security</td>
                                <td>Lulus</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td></td>
                                <td>Haaland</td>
                                <td>Cyber Security</td>
                                <td>Lulus</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td></td>
                                <td>Haaland</td>
                                <td>Cyber Security</td>
                                <td>Lulus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <div><i class="fa-solid fa-angle-left"></i></div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'layout/footer.html'; ?>
</body>
</html>