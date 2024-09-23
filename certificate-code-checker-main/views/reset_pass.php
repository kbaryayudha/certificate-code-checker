<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/hlogin.html'; ?>

    <main>
        <h2>Reset Password</h2>
        <a href="../views/forgot_pass.php"><i class="fa-regular fa-circle-left"></i></a>
        <div class="input_password">
            <form action="">
                <label>Old Password</label>
                <input type="password" placeholder="Masukkan Password Lama">
            </form>
        </div>
        <div class="input_password">
            <form action="">
                <label>New Password</label>
                <input type="password" placeholder="Masukkan Password Baru">
            </form>
        </div>
        
        <div class="button_submit">
            <a href="../views/login.php" class="btn-save-reset">Save</a>
        </div>
    </main>


    <?php include '../layout/footer.html'; ?>
</body>
</html>