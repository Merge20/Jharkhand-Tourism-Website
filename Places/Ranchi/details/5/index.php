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
    <title>Tourist Spots|Nakshatra Van</title>
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
        <img src="./Nakshatra-Van.jpeg" alt="Nakshatra Van">
        <div class="header-overlay">
            <h1>Nakshatra Van</h1>
        </div>
    </div>
    <div class="content">
        <h1>About Nakshatra Van</h1>
        <p>Nakshatra Van is a unique and beautifully designed park located in Ranchi, Jharkhand. Developed with a celestial theme, the park is divided into various sections based on different constellations (Nakshatras), each associated with specific trees according to Indian astrology. This innovative concept not only enhances the park’s aesthetic appeal but also provides visitors with an educational experience about the significance of trees in Vedic traditions. The well-maintained green spaces, pathways, and fountains create a serene ambiance, making it a perfect spot for relaxation and recreation.</p>
        <p>The park features a stunning musical fountain that captivates visitors in the evening with its vibrant light displays and synchronized water movements. Families, joggers, and nature enthusiasts frequent Nakshatra Van for its tranquil environment and well-planned landscape. It serves as an oasis of greenery amidst the urban hustle of Ranchi, providing a refreshing escape for residents and tourists alike. The park is particularly popular among photographers and those seeking a peaceful retreat away from the city’s noise.</p>
        <p>Besides its scenic beauty, Nakshatra Van also plays a role in environmental awareness. The park encourages visitors to learn about the ecological and mythological importance of various trees, promoting a deeper connection between nature and culture. With its well-structured seating areas, walking paths, and rich biodiversity, Nakshatra Van stands as a must-visit attraction in Ranchi, offering a blend of natural beauty, astrological significance, and leisurely charm.</p>
    </div>
    <div class="comments">
        <h2>Comments</h2>

        <form action="./php/submit_comment.php" method="POST">
            <textarea name="comment_text" rows="4" cols="50" placeholder="Write your comment here..." required></textarea>
            <input type="hidden" name="place_id" value="33">
            <br>
            <button type="submit" class="logout-button">Post Comment</button>
        </form>


        <div class="comment-section">
            <?php 
                $_GET['place_id'] = 33;
                include './php/fetch_comments.php'; 
            ?>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>
