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
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Tourist Spots|Silwar Hill</title>
    <link rel="icon" type="image/x-icon"  href="Assets/tab-icon.ico">
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
            <div class="places redirect ">
                <button class="toggle ">Places
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    </svg>
                </button>
                <div class="options ">
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
        <img src="./Silwar-Hill.png" alt="Silwar Hill">
        <div class="header-overlay">
            <h1>Silwar Hill</h1>
        </div>
    </div>
    <div class="content">
        <h1>About Silwar Hill</h1>
        <p>Silwar Hill, located near Hazaribagh, is a lesser-known yet beautiful attraction offering mesmerizing views of the surrounding landscape. The hill is covered with dense vegetation, making it an excellent place for trekking and hiking enthusiasts. Adventure seekers often visit Silwar Hill to explore its untouched natural beauty.</p>
        <p>The hilltop provides a breathtaking panoramic view of the entire Hazaribagh region, with rolling hills and green valleys stretching as far as the eye can see. The cool breeze and peaceful atmosphere make it an ideal spot for meditation and relaxation.</p>
        <p>For those who love exploring offbeat destinations, Silwar Hill is a hidden gem waiting to be discovered. Its untouched charm and stunning scenery make it a must-visit place for travelers looking to experience nature in its purest form.</p>
    </div>
    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="18">
            <br>
            <button type="submit" class="logout-button">Post Comment</button>
        </form>


        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 18;
                include './php/fetch_comments.php'; 
            ?>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>
