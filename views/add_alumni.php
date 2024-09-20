<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <h2>FORM INPUT DATA ALUMNI</h2>
        <div class="input_kode">
            <form>
                <label>Kode</label>
                <input type="text" placeholder="Masukkan Kode">
            </form>
        </div>
        <div class="input_nama">
            <form action="">
                <label>Nama</label>
                <input type="text" placeholder="Masukkan Nama">
            </form>
        </div>
        <div class="program">
            <form action="">
                <label>Program</label>
                <div class="radio_group">
                    <input type="radio" id="option1" name="choices" value="option1">
                    <label>XIT-Platinum Training Ethical Elite Hacker</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="option2" name="choices" value="option2">
                    <label for="option2">XIT-Advanced Network Hacking & Security</label>
                </div>
                <div class="radio_group">
                    <input type="radio" id="option3" name="choices" value="option3">
                    <label for="option3">Ethical Basic Web Hacking</label>
                </div>
            </form>
        </div>
        <div class="input_keterangan">
            <form action="">
                <label>Keterangan</label>
                <input type="text" placeholder="Masukkan Keterangan">
            </form>
        </div>
        <div class="button_submit">
            <button>Next</button>
        </div>
    </main>

    <?php include '../layout/footer.html'; ?>
</body>
</html>