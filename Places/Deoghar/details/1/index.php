<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../../../index.php");
    exit();
}
$username = $_SESSION['user'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Spots | Baidyanath Dham</title>
    <link rel="icon" type="image/x-icon" href="Assets/tab-icon.ico">
    <link rel="stylesheet" href="./styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="head">
        <div class="head-left">
            <div class="user-info">
                <img src="./php/account.svg" alt="Account" class="account-icon">
                <span class="username"><?php echo htmlspecialchars($username); ?></span>
            </div>
        </div>

        <div class="head-right">
            <div class="home redirect">
                <a href="../../../../home/index.php">Home</a>
            </div>

            <div class="places redirect">
                <button class="toggle">Places
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 
                            6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
                <div class="options">
                    <a href="../../../ranchi/index.php">Ranchi</a>
                    <a href="../../../Dhanbad/index.php">Dhanbad</a>
                    <a href="../../../Deoghar/index.php">Deoghar</a>
                    <a href="../../../Hazaribagh/index.php">Hazaribagh</a>
                    <a href="../../../jamshedpur/index.php">Jamshedpur</a>
                </div>
            </div>

            <div class="gallery redirect">
                <a href="../../../../Gallery/index.php">Gallery</a>
            </div>

            <div class="logout redirect">
                <form action="./php/logout.php" method="POST">
                    <button class="logout-button" type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>

    <div class="header-image">
        <img src="./Baidyanath_Dham.avif" alt="Baidyanath Dham">
        <div class="header-overlay">
            <h1>Baidyanath Dham</h1>
        </div>
    </div>

    <div class="content">
        <h1>About Baidyanath Dham</h1>
        <p>Baidyanath Dham, also known as Baba Baidyanath Temple, is one of the twelve Jyotirlingas of Lord Shiva and a highly revered pilgrimage site in India...</p>
        <p>The temple complex consists of multiple shrines dedicated to various deities, with the main sanctum housing the sacred Shiva Linga...</p>
        <p>Baidyanath Dham is not just a religious site but also a place of historical and architectural significance...</p>
    </div>

    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST" class="comment-form">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="1">
            <button type="submit" class="logout-button">Post Comment</button>
        </form>

        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 1; 
                include './php/fetch_comments.php'; 
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
