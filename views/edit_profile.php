<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/edit_profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <h2>Edit Profile</h2>
        <div class="input_nama">
            <form action="">
                <label>Name</label>
                <input type="text" placeholder="Masukkan Nama" value="Admin Satu">
            </form>
        </div>
        <div class="input_username">
            <form action="">
                <label>Username</label>
                <input type="text" placeholder="Masukkan Username" value="@admin1">
            </form>
        </div>
        <div class="input_email">
            <form action="">
                <label>Email</label>
                <input type="text" placeholder="Masukkan Email" value="admin1@gmail.com">
            </form>
        </div>
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
            <button type="submit">Save</button>
        </div>
    </main>

    <?php include '../layout/footer.html'; ?>
</body>
</html>