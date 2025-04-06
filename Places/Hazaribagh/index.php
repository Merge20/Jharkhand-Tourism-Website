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
    <title>Tourist Spots|Hazaribagh</title>
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
                    <button class="toggle ">Hazaribagh
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="options ">
                        <a href="../Dhanbad/index.php">Deoghar</a>
                        <a href="../Dhanbad/index.php">Dhanbad</a>
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
                    <h1>PLACES TO VISIT IN HAZARIBAGH</h1>
                    <h3>Hazaribagh—where nature's serenity meets history's charm in the heart of Jharkhand.</h3>
                    <p>Hazaribagh, known for its serene hills, lush greenery, and rich biodiversity, is a perfect getaway for nature lovers and wildlife enthusiasts. Home to the famous Hazaribagh Wildlife Sanctuary, this place offers a unique blend of adventure, tranquility, and scenic beauty. Whether you are an explorer seeking thrilling experiences, a history buff intrigued by ancient sites, or someone looking for a peaceful retreat amidst nature, Hazaribagh has something for everyone. So, let's explore some of the most beautiful places this city has to offer!</p>
                </div>
            </div>

            <div class="row1 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/canary-hills.png" alt="canary-hills" title="Canary Hills">
                    </div>
                    <div class="detail detail1">
                        <h2>Canary Hills</h2>
                        <p>Canary Hill is a renowned tourist spot in Hazaribagh, Jharkhand, India, known for its lush green surroundings and panoramic view of the town and dense forests. It's a perfect retreat for nature lovers, photographers, and adventure enthusiasts. Canary Hill encapsulates the natural beauty of the Chotanagpur plateau with an elevation that offers a striking vantage point. The hill receives its name from the vibrant canary-yellow flowers adorning its slopes. Visitors can explore the small hillocks and revel in the tranquility away from city life.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/1/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Hazaribagh-Lake.png" alt="Hazaribagh Lake" title="Hazaribagh Lake">
                    </div>
                    <div class="detail detail2">
                        <h2>Hazaribagh Lake</h2>
                        <p>Hazaribagh Lake is a popular tourist attraction located in the heart of Hazaribagh, a town in Jharkhand, India. Surrounded by lush greenery and scenic beauty, this man-made lake is an integral part of the Hazaribagh plateau, contributing significantly to the aesthetic appeal of the region. The lake serves as a serene spot for picnics, boating, and tranquil walks along the banks. The green landscapes and cool breeze from the water make it an inviting place for both tourists and locals to relax.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/2/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/national-park.png" alt="Hazaribagh Wildlife Sanctuary" title="Hazaribagh Wildlife Sanctuary">
                    </div>
                    <div class="detail detail3">
                        <h2>Hazaribagh Wildlife Sanctuary</h2>
                        <p>Hazaribagh Wildlife Sanctuary, located in the Hazaribagh district of Jharkhand, is one of India's oldest wildlife reserves, established in 1955. Spanning approximately 186 square kilometers, the sanctuary is known for its dense tropical and dry deciduous forests, featuring trees like Sal, Bamboo, Mahua, and Palash. It is home to a variety of wildlife, including leopards, sloth bears, sambar deer, chitals, nilgais, and wild boars.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/3/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row2 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Konar-Dam.png" alt="Konar Dam" title="Konar Dam">
                    </div>
                    <div class="detail detail4">
                        <h2>Konar Dam</h2>
                        <p>Konar Dam, located in the Hazaribagh district of Jharkhand, India, is a significant reservoir and part of the Konar River Valley project aimed at providing water for irrigation, drinking, and industrial uses. Constructed across the Konar River, a tributary of the Damodar River, the dam was completed in 1955. It stands amidst picturesque surroundings characterized by hilly terrains and lush greenery, making it popular for picnics and sightseeing.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/4/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Silwar-Hill.png" alt="Silwar Hill" title="Silwar Hill">
                    </div>
                    <div class="detail detail5">
                        <h2>Silwar Hill</h2>
                        <p>Silwar Hill is a picturesque and historically significant hill located near Silwar village in Hazaribagh, Jharkhand. It is known for its serene environment and offers a beautiful panoramic view of the surrounding landscape. The hill is close to Vinoba Bhave University and is a popular spot for locals and visitors seeking a peaceful retreat in nature. The area around the hill is rich in natural beauty, with lush greenery and rocky terrain that add to its charm.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/5/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/Tilaiya Dam.png" alt="Tilaiya Dam" title="Tilaiya Dam">
                    </div>
                    <div class="detail detail6">
                        <h2>Tilaiya Dam</h2>
                        <p>Tilaiya Dam is a breathtaking destination located in the Koderma district of Jharkhand, offering a perfect blend of natural beauty and engineering excellence. Built in 1953, it was the first dam constructed under the Damodar Valley Corporation (DVC) and serves as a crucial source of hydroelectric power, irrigation, and flood control. Surrounded by lush green hills and a vast reservoir, Tilaiya Dam is a paradise for nature lovers, adventure seekers, and peace seekers alike. The calm waters of the Tilaiya Reservoir make it an ideal spot for boating, fishing, and picnics.</p>
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