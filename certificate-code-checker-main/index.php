<?php
session_start();
require './config.php';
// // Redirect to dashboard if the user is already logged in
// if (isset($_SESSION['user_id']==="admin")) {
//     header('Location: ./views/dashboard.php');
//     exit();
// }


if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT id, username, password FROM daftaruser WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ( $stmt->num_rows > 0 ) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if ( password_verify($password, $hashed_password) ) {
            //mulai sesi jika ketemu password yang tepat
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header('Location: ./views/dashboard.php');
            exit();
        } else {
            echo 'Invalid password.';
        }
    } else {
        echo 'No user found with that username.';
    }

    $stmt->close();
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include './layout/hlogin.html'; ?>

    <main>
        <h1>LOGIN</h1>
        <div class="login-card">
            <div class="login-icon">
                <i class="fas fa-user-circle icon"></i>
            </div>
            <form action="../views/dashboard.php" method="POST">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i id="icon-user" class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-with-icon">
                        <i id="icon-lock" class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="extra-options">
                    <label>
                        <input type="checkbox" values="Remember">
                        Remember me
                    </label>
                    <a href="../views/forgot_pass.php">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>


    <?php include './layout/footer.html'; ?>
</body>
</html>