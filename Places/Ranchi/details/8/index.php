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
    <title>Tourist Spots|Birsa Zoological Park</title>
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
                <a href="../../../../ranchi/index.php">Home</a>
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
        <img src="./Birsa-Zoological-Park.jpeg" alt="Birsa Zoological Park">
        <div class="header-overlay">
            <h1>Birsa Zoological Park</h1>
        </div>
    </div>
    <div class="content">
        <h1>About Birsa Zoological Park</h1>
        <p>Birsa Zoological Park, also known as Birsa Jaivik Udyan, is one of the most well-maintained zoological parks in Jharkhand. Located on the outskirts of Ranchi near Ormanjhi, the park is home to a diverse range of wildlife, including tigers, leopards, deer, elephants, and numerous bird species. Spread over a vast area, the zoo offers visitors a chance to experience nature up close while learning about conservation efforts.</p>
        <p>The park is designed to provide a natural habitat for the animals, ensuring their well-being while allowing visitors to observe them in a safe environment. With spacious enclosures, lush greenery, and well-paved pathways, Birsa Zoological Park is an excellent destination for families, students, and wildlife enthusiasts. The zoo also has an informative section on flora and fauna, making it an educational experience for visitors of all ages.</p>
        <p>In addition to its rich biodiversity, the park actively engages in conservation and breeding programs for endangered species. It serves as an important center for wildlife awareness, encouraging visitors to understand and appreciate the significance of ecological balance. With its serene ambiance, well-kept facilities, and a wide variety of species, Birsa Zoological Park is a must-visit attraction for anyone exploring Ranchi.</p>
    </div>
    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="36">
            <br>
            <button type="submit" class="logout-button">Post Comment</button>
        </form>


        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 36;
                include './php/fetch_comments.php'; 
            ?>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>
