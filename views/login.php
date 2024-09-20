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
    <?php include '../layout/hlogin.html'; ?>

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


    <?php include '../layout/footer.html'; ?>
</body>
</html>