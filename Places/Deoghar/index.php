<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../index.php");
    exit();
}
$username = $_SESSION['user'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tourist Spots|Deoghar</title>
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
                    <a href="../../home/index.php">Home</a>
                </div>
                <div class="places redirect ">
                    <button class="toggle ">Deoghar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="options ">
                        <a href="../Dhanbad/index.php">Dhanbad</a>
                        <a href="../Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../Jamshedpur/index.php">Jamshedpur</a>
                        <a href="../ranchi/index.php">Ranchi</a>
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
            <div class="intro">
                <div class="about">
                    <h1>WELCOME TO DEOGHAR</h1>
                    <h3>Deoghar – a holy place that brings peace to the mind and spirit.</h3>
                    <p>The sacred Hindu site of Deoghar. This destination is nestled beside the gurgling Mayurakshi River. Deoghar's main temple complex features 22 individual temples and is considered to be one of India's most significant jyotirlingams. People who are in search of peace and spirituality often make their way to Deoghar.</p>
                </div>
            </div>

            <div class="row1 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./assets/Baidyanath_Dham.avif" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Baidyanath Dham</h2>
                        <p>Baidyanath Dham, Deoghar, is a revered pilgrimage site renowned for its ancient temple dedicated to Lord Shiva. Nestled in the heart of Deoghar, this sacred destination attracts devotees from across India who come to seek blessings and spiritual solace. The temple's rich history, vibrant rituals, and serene atmosphere make Baidyanath Dham a profound and inspiring place of worship.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/1/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./assets/basukinath-temple.jpg" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Basukinath Temple</h2>
                        <p>Basukinath Temple, located near Deoghar, is a revered Hindu shrine dedicated to Lord Shiva. Known for its tranquil setting and historical significance, the temple attracts devotees seeking spiritual solace and blessings. The intricate architecture and serene atmosphere make Basukinath Temple a significant pilgrimage destination and a place of deep devotion.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/2/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./assets/Shivganga.avif" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Shivganga</h2>
                        <p>Shivganga is a Sacred Pond located 200m from the Baba Baidyanath Temple at Deoghar Jharkhand. Devotees take water from Shivaganga to offer to Lord Shiva at the the Baidyanath Temple. There is a huge Idol of Lord Shiva on one end of Shiva Ganga. Historically, the Pond has never dried up.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/3/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row2 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./assets/trikuta-parvata.jpg" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Trikuta Parvat</h2>
                        <p>Trikuta Parvat, located near Deoghar, is a picturesque hill renowned for its breathtaking views and serene environment. It is a popular destination for pilgrims and nature enthusiasts alike, offering a tranquil escape and spiritual ambiance. The hill is celebrated for its natural beauty and is often associated with local legends and religious significance.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/4/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./assets/mayurakshi-river.png" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Mayurakshi River</h2>
                        <p>The Mayurakshi River, originating from the Parasnath hills in the Giridih district of Jharkhand, is an important river that flows through the Deoghar district. Its name, derived from "Mayura" (peacock) and "Akshi" (eye), symbolizes the shape of the river’s path, which resembles the eye of a peacock. The river flows southeastward, passing through several towns and villages, providing essential water resources for agriculture and daily use.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/5/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./assets/naulakha_temple.avif" alt="" title="">
                    </div>
                    <div class="detail">
                        <h2>Naulakha Mandir</h2>
                        <p>This ancient temple, dedicated to Lord Shiva, has captivated devotees and visitors alike for centuries with its grandeur, craftsmanship, and spiritual ambiance. The history of Naulakha Mandir dates back to the 18th century when it was commissioned by Rani Charushila, the queen of the Pathuria Ghat King.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/6/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>            
            
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>