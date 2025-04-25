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
    <title>Sign-Up</title>
</head>
<body>
    <div class="container">

        <?php if (isset($_SESSION['success'])): ?>
            <div class="success-message">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']); 
                ?>
            </div>
            <script>
                setTimeout(() => {
                    window.location.href = "../index.php";
                }, 3000);
            </script>
        <?php endif; ?>


        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']); 
                ?>
            </div>
        <?php endif; ?>

        <form action="../database/manage.php" method="POST" autocomplete="off">

            
            <div class="head">
                <div class="head-text">Create an account</div>
                <div class="login">
                    <p>Already have an account? <a href="../index.php">Login</a></p>
                </div>
            </div>

            <div class="body">
                <div class="body-1">
                    <div class="first-name">
                        <input type="text" id="first" name="first" placeholder="First Name" autocomplete="none" required>
                    </div>
                    <div class="last-name">
                        <input type="text" id="last" name="last" placeholder="Last Name" autocomplete="none"  required>
                    </div>
                </div>

                <div class="body-2">
                    <input type="text" id="username" name="username" placeholder="Username"   required>
                </div>

                <div class="body-3">
                    <input type="email" id="email" name="email" placeholder="Email"   required>
                </div>

                <div class="body-4">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <div class="icon" onclick="password()"><img src="../assets/lock.svg"></div>
                </div>

            </div>
            
            <div class="foot">
                <button>Create Account</button>
            </div>

        </form>

        <script src="./script.js"></script>
    </div>

</body>
</html>