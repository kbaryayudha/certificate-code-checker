<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alumni X-Code Training</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-container {
            z-index: 10000;
        }
        .swal2-actions {
            display: flex;
            justify-content: center;
        }
        .swal2-styled.swal2-confirm, .swal2-styled.swal2-cancel {
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0 10px;
            width: 150px;
        }
        .swal2-styled.swal2-confirm {
            background-color: #3085d6;
            color: white;
        }
        .swal2-styled.swal2-cancel {
            background-color: #d33;
            color: white;
        }
    </style>
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <div class="card">
            <div class="table">
                <h2>Daftar Alumni X-Code Training</h2>
                <div class="table_header">
                    <a href="add_alumni.php" class="btn-add-alumni"><i class="fa-solid fa-plus"></i> Alumni</a>
                    <form method="post" action="dashboard.php">
                        <input type="text" name="search" placeholder="Cari data di sini">
                        <button class="button" type="submit" name="submit" value="Cari">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
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
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../config.php';

                                $query = "SELECT id_alumni, kode, nama, program, keterangan FROM daftaralumni";
                                $search = '';

                                if ($_SERVER['REQUEST_METHOD'] === "POST") {
                                    $search = trim($_POST['search']);
                                    if (!empty($search)) {
                                        $query .= " WHERE kode = ?";
                                    }
                                }

                                if ($stmt = $conn->prepare($query)) {
                                    if (!empty($search)) {
                                        $stmt->bind_param("s", $search);
                                    }

                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result->num_rows > 0) {
                                        while ($data = $result->fetch_assoc()) {
                                            $id_alumni = htmlspecialchars($data['id_alumni']);
                                            $kode = htmlspecialchars($data['kode']);
                                            $nama = htmlspecialchars($data['nama']);
                                            $program = htmlspecialchars($data['program']);
                                            $keterangan = htmlspecialchars($data['keterangan']);

                                            echo "<tr>
                                                    <td>{$id_alumni}</td>
                                                    <td>{$kode}</td>
                                                    <td>{$nama}</td>
                                                    <td>{$program}</td>
                                                    <td>{$keterangan}</td>
                                                    <td>
                                                        <a href=\"edit_alumni.php?id={$id_alumni}\" class=\"btn-edit\">
                                                            <i class=\"fa-regular fa-pen-to-square\"></i> Edit
                                                        </a>
                                                        <a href=\"#\" class=\"btn-delete-alumni\" onclick=\"return confirmDelete({$id_alumni})\">
                                                            <i class=\"fa-regular fa-trash-can\"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Maaf, data tidak tersedia</td></tr>";
                                    }
                                    $stmt->close();
                                }
                            ?>
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

    <?php include '../layout/footer.html'; ?>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data yang dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan tombol "Ya, hapus!", lanjutkan ke proses penghapusan
                    window.location.href = `delete_alumni.php?id=${id}`;
                }
            });
        }
    </script>
</body>
</html>
