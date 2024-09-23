<?php
include '../config.php';

// Ambil data alumni berdasarkan ID
$id_alumni = $_GET['id'] ?? '';
$alumni = null;

if (!empty($id_alumni)) {
    $stmt = $conn->prepare("SELECT kode, nama, program, keterangan FROM daftaralumni WHERE id_alumni = ?");
    $stmt->bind_param("i", $id_alumni);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $alumni = $result->fetch_assoc();
    } else {
        echo "Data alumni tidak ditemukan.";
        exit;
    }
    $stmt->close();
} else {
    echo "ID alumni tidak valid.";
    exit;
}

// Proses update data alumni
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
    $stmt = $conn->prepare("UPDATE daftaralumni SET nama = ?, program = ?, keterangan = ? WHERE kode = ?");
    $stmt->bind_param("ssss", $nama, $program, $keterangan, $kode);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data alumni berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the dashboard after update
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Alumni</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <h2>FORM EDIT DATA ALUMNI</h2>
        <form action="" method="post">
            <div class="input_kode">
                <label for="kode">Kode</label>
                <input type="text" id="kode" name="kode" value="<?php echo htmlspecialchars($alumni['kode']); ?>" readonly>
            </div>
            <div class="input_nama">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo htmlspecialchars($alumni['nama']); ?>" required>
            </div>
            <div class="program">
                <label>Program</label>
                <div class="radio_group">
                    <input type="radio" id="program1" name="program" value="XIT-Platinum Training Ethical Elite Hacker" <?php echo ($alumni['program'] == 'XIT-Platinum Training Ethical Elite Hacker') ? 'checked' : ''; ?>>
                    <label for="program1">XIT-Platinum Training Ethical Elite Hacker</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="program2" name="program" value="XIT-Advanced Network Hacking & Security" <?php echo ($alumni['program'] == 'XIT-Advanced Network Hacking & Security') ? 'checked' : ''; ?>>
                    <label for="program2">XIT-Advanced Network Hacking & Security</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="program3" name="program" value="Ethical Basic Web Hacking" <?php echo ($alumni['program'] == 'Ethical Basic Web Hacking') ? 'checked' : ''; ?>>
                    <label for="program3">Ethical Basic Web Hacking</label>
                </div>
            </div>
            <div class="input_keterangan">
                <label for="keterangan">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo htmlspecialchars($alumni['keterangan']); ?>" required>
            </div>
            <div class="button_submit">
                <button type="submit">Update</button>
            </div>
        </form>
    </main>

    <?php include '../layout/footer.html'; ?>
</body>
</html>
