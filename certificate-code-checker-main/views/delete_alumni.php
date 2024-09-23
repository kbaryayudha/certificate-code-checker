<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Ambil ID alumni dari URL
    $id_alumni = $_GET['id'] ?? '';

    if (!empty($id_alumni)) {
        // Prepare and bind
        $stmt = $conn->prepare("DELETE FROM daftaralumni WHERE id_alumni = ?");
        $stmt->bind_param("i", $id_alumni);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data alumni berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
    } else {
        echo "ID alumni tidak valid.";
    }

    // Redirect to the dashboard after deletion
    header("Location: dashboard.php");
    exit;
} else {
    echo "Metode permintaan tidak valid.";
    exit;
}

$conn->close();
?>
