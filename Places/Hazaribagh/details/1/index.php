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
    <title>Tourist Spots|Canary Hills</title>
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
        <img src="./canary-hills.png" alt="Canary Hills">
        <div class="header-overlay">
            <h1>Canary Hills</h1>
        </div>
    </div>
    <div class="content">
        <h1>About Canary Hills</h1>
        <p>Canary Hills, located in Hazaribagh, is a stunning natural attraction that offers panoramic views of the town and its surroundings. The hill is covered with dense greenery and has a beautiful lake at its base, making it a perfect destination for nature lovers and adventure enthusiasts. The peaceful atmosphere and breathtaking landscape make it a great spot for relaxation and photography.</p>
        <p>One of the main highlights of Canary Hills is the observation tower at the top, from where visitors can enjoy mesmerizing views of the entire region. The hill is also home to various species of birds, making it an excellent location for bird watchers. Whether you're trekking up the hill or simply enjoying the tranquility of the surroundings, Canary Hills is a must-visit destination in Hazaribagh.</p>
        <p>Besides its natural beauty, Canary Hills also has historical significance. The British administration once used this site for strategic observations. Today, it stands as a serene getaway for travelers looking to experience the untouched beauty of nature.</p>
    </div>
    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="14">
            <br>
            <button type="submit" class="logout-button">Post Comment</button>
        </form>


        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 14;
                include './php/fetch_comments.php'; 
            ?>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>
