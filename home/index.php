<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['user'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Tourist Spots | Home</title>
    <link rel="icon" type="image/x-icon" href="Assets/tab-icon.ico">
</head>

<body>
    <div class="container">
        <div class="head">
            <div class="head-left">
                <div class="user-info">
                    <img src="./php/account.svg" alt="Account" class="account-icon">
                    <span class="username"><?php echo htmlspecialchars($username); ?></span>
                </div>
            </div>
            <div class="head-right">
                <div class="home redirect">
                    <a href="./index.php">Home</a>
                </div>
                <div class="places redirect">
                    <button class="toggle">Places
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                    <div class="options">
                        <a href="../../Places/Ranchi/index.php">Ranchi</a>
                        <a href="../../Places/Dhanbad/index.php">Dhanbad</a>
                        <a href="../../Places/Deoghar/index.php">Deoghar</a>
                        <a href="../../Places/Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../../Places/Jamshedpur/index.php">Jamshedpur</a>
                    </div>
                </div>
                <div class="gallery redirect">
                    <a href="../../Gallery/index.php">Gallery</a>
                </div>
                
                <div class="logout redirect">
                    <form action="./php/logout.php" method="POST">
                        <button class="logout-button" type="submit">Log Out</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="body">
            <div class="slider">
                <div class="wrapper">
                    <img src="../Assets/patratu-valley.png"> 
                    <img src="../Assets/dassam-falls.jpg">
                    <img src="../Assets/hudru-falls.png">  
                    <img src="../Assets/jonha-falls.jpg">
                </div>
            </div>
            <div class="intro">
                <div class="about">
                    <h1>Discover the Hidden Beauty of Jharkhand</h1>
                    <h3>From majestic waterfalls to lush green valleys, explore the unexplored and experience the heart
                        of nature.</h3>
                    <p>Welcome to Jharkhand, a land of breathtaking landscapes, ancient temples, and rich tribal
                        heritage. Whether you're an adventure seeker, nature lover, or history enthusiast, Jharkhand has
                        something special for you. Explore mesmerizing waterfalls like Hundru and Dassam, witness the
                        stunning Patratu Valley, or dive into the history of Betla Fort. Begin your journey today!</p>
                    <a href="../Gallery/index.php" class="button">Explore Now</a>
                </div>
            </div>
        </div>

        <div class="foot">
            <div class="bottom-bar">
                -|| Developed by Keshav Aditya And Ankit ||-
            </div>
        
    </div>

    <script src="script.js"></script>
</body>

</html>
