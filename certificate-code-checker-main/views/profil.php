<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/header.html'; ?>

    <main>
        <h2>Profile</h2>
        <div class="profile_photo">
            <img src="../static/images/pp.png" alt="Profile Picture">
            <button class="btn-edit-image" onclick="document.getElementById('fileInput').click();">
            <i class="fa-solid fa-camera"></i>
            </button>
            <input type="file" id="fileInput" style="display: none;" onchange="previewImage(event)">
        </div>
        <div class="profil">
            <div class="profile_info">
                <p class="admin_name">Admin Satu</p>
                <p class="admin_username">@admin1</p>
                <p class="admin_email">admin1@gmail.com</p>
            </div>
            <div class="profile_edit">
                <a href="../views/edit_profile.php" class="btn-edit-profile"><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
        </div>
        <a href="../views/login.php" class="btn-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
    </main>

    <?php include '../layout/footer.html'; ?>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.querySelector('.profile_photo img');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
