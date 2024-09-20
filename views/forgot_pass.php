<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/forgot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/hlogin.html'; ?>

    <main>
        <h1>Forgot Password</h1>
        <div class="forgot_card">
            <a href="../views/login.php"><i class="fa-regular fa-circle-left"></i></a>
            <div class="forgot_images">
                <img src="../static/images/fp.png" alt="">
            </div>
            <div class="forgot_form">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <p id="error-message" class="error-message"></p>
            </div>
            <a href="#" id="btn-send" class="btn-forgot">Send</a>
        </div>
    </main>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
                <h2>Enter OTP</h2>
            </div>
            <div class="modal-body">
                <img src="../static/images/otp.png" alt="">
                <p>We have sent the code to admin1@gmail.com</p>
                <p>Please enter the code!</p>
                <form id="otp-form" action="../views/reset-password.php" method="post">
                    <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>
                    <a href="../views/reset_pass.php" id="btn-send-otp" class="btn-send-otp">Send</a>
                </form>
            </div>  
        </div>
    </div>

    <script src="../static/js/modal.js"></script>
    
    <?php include '../layout/footer.html'; ?>
</body>
</html>