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
    <title>Tourist Spots|Kalamandir</title>
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
        <img src="./Kalamandir.png" alt="Kalamandir">
        <div class="header-overlay">
            <h1>Kalamandir</h1>
        </div>
    </div>
    <div class="content">
        <h1>About Kalamandir</h1>
        <p>Kalamandir is a prominent cultural center in Jamshedpur, dedicated to preserving and promoting the rich heritage of art, music, and dance. It serves as a hub for artists and performers, providing a platform for showcasing traditional and contemporary forms of artistic expression. The center is known for hosting a variety of events, including classical music concerts, dance performances, theater productions, and art exhibitions.</p>
        <p>The architectural design of Kalamandir reflects the essence of Indian heritage, with well-crafted interiors that enhance the cultural ambiance of the venue. Many renowned artists and cultural enthusiasts visit Kalamandir to participate in workshops and interactive sessions that help nurture creativity and talent among aspiring performers. The center also organizes educational programs to introduce young minds to the world of art and culture.</p>
        <p>Beyond being a performance venue, Kalamandir plays a crucial role in community development by supporting local artists and cultural initiatives. It stands as a beacon of artistic inspiration, making Jamshedpur a thriving destination for cultural appreciation. Whether you are an art lover or a performer, Kalamandir offers an enriching experience that celebrates the spirit of creativity and tradition.</p>
    </div>
    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="23">
            <br>
            <button type="submit" class="logout-button">Post Comment</button>
        </form>


        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 23;
                include './php/fetch_comments.php'; 
            ?>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>
