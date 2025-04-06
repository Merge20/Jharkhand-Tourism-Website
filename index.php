<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <div class="container">

        <?php if (isset($_SESSION['error'])): ?>
            <div class="message">
                <?= $_SESSION['error'] ?>
            </div>
        <?php unset($_SESSION['error']); endif; ?>


        <form action="./manage.php" method="POST"  autocomplete="off">
            <div class="head">
                <p>Login</p>
            </div>

            <div class="body">
                <div class="email-box">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
    
                <div class="password-box">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <div class="icon" onclick="password()"><img src="./assets/lock.svg"></div>
                </div>
            </div>

            <div class="foot">
                <div class="submit-button">
                    <button>Login</button>
                </div>
    
                <div class="sign-up">
                    <p>Don't have an account? <a href="./SignUp/index.php">Register</a></p>
                </div>
            </div>

        </form>

        <script src="./script.js"></script>
    </div>

</body>
</html>