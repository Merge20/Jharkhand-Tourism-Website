<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../../../index.php");
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
    <title>Tourist Spots|Dhanbad</title>
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
                    <button class="toggle ">Dhanbad
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="options ">
                        <a href="../deoghar/index.php">Deoghar</a>
                        <a href="../Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../Jamshedpur/index.php">Jamshedpur</a>
                        <a href="../Ranchi/index.php">Ranchi</a>
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
                    <h1>WELCOME TO DHANBAD</h1>
                    <h3>Dhanbad – The Coal Capital where energy fuels progress and history meets industry.</h3>
                    <p>Dhanbad, a major city in the Indian state of Jharkhand and sometimes referred to as ‘The Coal Capital of India’, is an important centre for the manufacturing industry. Dhanbad is one of the fastest developing cities in the world and it is well-known for its large number of colliery units and important industrial companies. </p>
                </div>
            </div>

            <div class="row1 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./assets/Bhatinda_fall.avif" alt="Bhatinda_fall" title="Bhatinda fall">
                    </div>
                    <div class="detail">
                        <h2>Bhatinda fall</h2>
                        <p>Bhatinda Falls is a stunning waterfall that cascades down the huge boulders. It is also known as the Moonidi Waterfall and is situated 14 kilometres from Dhanbad Station. Visitors are drawn to the falls because of the lush vegetation and rugged terrain that surrounds them. The picnic area is perfect for large parties in need of rest. The area's tranquil and natural splendour draw many tourists who come to relax and enjoy the outdoors.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/1/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./assets/Jagannath_temple.avif" alt="Jagannath_temple" title="Jagannath temple">
                    </div>
                    <div class="detail">
                        <h2>Jagannath temple</h2>
                        <p>The Jagannath Temple is a must-see for every visitor to Dhanbad. Lord Jagannath, together with his consorts Balbhadra and Subhadra, are the primary deities worshipped in this temple. The main event at this temple is the annual 'Rath Yatra,' also known as the 'Car Festival,' which is celebrated with much pageantry.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/2/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./assets/Maithon_dam.avif" alt="Maithon_dam" title="Maithon dam">
                    </div>
                    <div class="detail">
                        <h2>Maithon dam</h2>
                        <p>One of the major dams in Jharkhand is Maithon Dam, which was constructed in 1957. The Maithon dam is a major draw for tourists touring Dhanbad. The scenery behind the dam is especially beautiful during the sunset, so many people come here for sightseeing.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/3/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row2 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./assets/Maithon_lake.avif" alt="Maithon_lake" title="Maithon lake">
                    </div>
                    <div class="detail">
                        <h2>Maithon lake</h2>
                        <p>Picnicking at the lovely Maithon Lake is a must when visiting Dhanbad. It's a popular tourist destination because it offers the opportunity for boating and fishing amid the peaceful, unspoiled scenery. Visitors may enjoy the lake's boating and fishing amenities. Deer Park and Bird Sanctuary are also accessible and make for a great day trip for anybody with an interest in nature.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/4/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./assets/Panchet_dam.avif" alt="Panchet_dam" title="Panchet dam">
                    </div>
                    <div class="detail">
                        <h2>Panchet dam</h2>
                        <p>Dhanbad is also home to the historic Panchet Dam, which first opened to the public in 1959. The construction of the dam across the Damodar River has created a stunning backdrop. There is a stunning beauty to both the dam and the path leading up to it.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/5/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./assets/Topchanchi_lake.avif" alt="Topchanchi_lake" title="Topchanchi lake">
                    </div>
                    <div class="detail">
                        <h2>Topchanchi lake</h2>
                        <p>As a popular recreational area and tourist destination, Topchanchi Lake is a must-see for anybody visiting Dhanbad. The tranquillity and allure of Topchanchi Lake make it a popular destination. In 1915, the slopes of the Parasnath Hills were excavated to create this artificial lake. Prior to the construction of dams, this lake provided the majority of Jharia with its water.</p>
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