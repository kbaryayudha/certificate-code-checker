<?php



include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode = trim($_POST['kode']);
    $nama = trim($_POST['nama']);
    $program = trim($_POST['program']);
    $keterangan = trim($_POST['keterangan']);

    // Validasi input
    if (empty($kode) || empty($nama) || empty($program) || empty($keterangan)) {
        echo "Semua kolom harus diisi!";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO daftaralumni (kode, nama, program, keterangan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $kode, $nama, $program, $keterangan);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location:dashboard.php");
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Metode permintaan tidak valid.";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Alumni</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <h2>FORM INPUT DATA ALUMNI</h2>
        <form action="" method="post">
            <div class="input_kode">
                <label for="kode">Kode</label>
                <input type="text" id="kode" name="kode" placeholder="Masukkan Kode" required>
            </div>
            <div class="input_nama">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="program">
                <label>Program</label>
                <div class="radio_group">
                    <input type="radio" id="program1" name="program" value="XIT-Platinum Training Ethical Elite Hacker" required>
                    <label for="program1">XIT-Platinum Training Ethical Elite Hacker</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="program2" name="program" value="XIT-Advanced Network Hacking & Security">
                    <label for="program2">XIT-Advanced Network Hacking & Security</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="program3" name="program" value="Ethical Basic Web Hacking">
                    <label for="program3">Ethical Basic Web Hacking</label>
                </div>
            </div>
            <div class="input_keterangan">
                <label for="keterangan">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" required>
            </div>
            <div class="button_submit">
                <button type="submit">Next</button>
            </div>
        </form>
    </main>

    <?php include '../layout/footer.html'; ?>
</body>
</html>
