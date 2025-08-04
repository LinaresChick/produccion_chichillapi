<?php
// Puedes usar esta sección para incluir archivos PHP, manejar sesiones, etc.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludiflex | Login & Register</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="assets/css/style-login.css">
</head>
<body>
    <div class="form-container">
        <div class="col col-1">
            <div class="image-layer">
                <img src="assets/img/white-outline.png" class="form-image-main">
                <img src="assets/img/dots.png" class="form-image dots">
                <img src="assets/img/coin.png" class="form-image coin">
                <img src="assets/img/spring.png" class="form-image spring">
                <img src="assets/img/rocket.png" class="form-image cloud">
                <img src="assets/img/cloud.png" class="form-image cloud">
                <img src="assets/img/stars.png" class="form-image stars">
            </div>
            <p class="featured-words">sistema de ovas que se gestion <span>Ludiflex</span></p>
        </div>

        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Sing In</button>
                <button class="btn btn-2" id="register"> Sing Up</button>
        </div>
        <!--Register Form Container-->
        <div class="register-form">
            <div class="form-title">
                <span>Create Account</span>
            </div>
            <div class="form-inputs">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" required>
                    <i class="bx bx-envelope icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" required>
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Passwor?</a>
                </div>
                <div class="input-box"></div>
                <button class="input-submit">
                    <span>Sign Up</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </button>
            </div>
            <div class="social-login">
                <i class="bx bxl-google"></i>
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-twitter"></i>
                <i class="bx bxl-github"></i>
            </div>
        </div>
    </div>
</div>
    <script src="assets/js/main.js"></script>
</body>
</html>