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
    <title>Tourist Spots|Ranchi</title>
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
                    <button class="toggle ">Ranchi
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="options ">
                        <a href="../deoghar/index.php">Deoghar</a>
                        <a href="../Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../Jamshedpur/index.php">Jamshedpur</a>
                        <a href="../Dhanbad/index.php">Dhanbad</a>
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
                    <h1>BEST PLACES TO VISIT IN RANCHI</h1>
                    <h3>Ranchi – Where nature meets serenity, and waterfalls whisper timeless stories.</h3>
                    <p>If you think Ranchi is only about Dhoni, think again! This capital city of Jharkhand is an unsung hero in the travel world, filled with breathtaking waterfalls, historic temples, picturesque hills, and enough natural beauty to make your Instagram feed resemble a National Geographic feature. Whether you're a nature lover, or just looking for a weekend retreat, Ranchi has something for everyone. So, let's explore the top places to visit in Ranchi and discover why this city should be on your travel bucket list.</p>
                </div>
            </div>

            <div class="row1 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Dassam-Falls.jpeg" alt="Dassam Fall" title="Dassam Fall">
                    </div>
                    <div class="detail">
                        <h2>Dassam Fall</h2>
                        <p>Situated near Ranchi, this stunning location showcases the Kanchi River as it cascades dramatically, creating a truly breathtaking sight. It's a tourist place near Ranchi for anyone who loves adventure and the beauty of nature. The ideal time to visit is between October and February. You can enjoy activities like trekking, taking in the scenic views, and photography. Just be cautious of the slippery rocks, or you might find yourself on an unexpected adventure!</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/1/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Hundru-Falls.jpg" alt="Hundru Fall" title="Hundru Fall">
                    </div>
                    <div class="detail">
                        <h2>Hundru Fall</h2>
                        <p>No visit to Ranchi would be complete without a trip to Hundru Falls, one of the best Ranchi tourist places. Falling from a height of 98 meters, this waterfall is particularly stunning during the monsoon season, making it a highlight of Ranchi's sightseeing places. The ideal time to visit is between October and March, when the water flow is consistent and safe. Activities here include trekking, photography, and enjoying a picnic by the falls.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/2/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/Jonha-Falls.jpeg" alt="Jonha Fall" title="Jonha Fall">
                    </div>
                    <div class="detail">
                        <h2>Jonha Fall</h2>
                        <p>Also known as Gautamdhara Falls, Jonha Falls is perfect for waterfall enthusiasts who enjoy a bit of trekking. It's one of the famous places in Ranchi where the sounds of nature blend with peace. Tucked away in a lush forest, the view of water cascading down the hills is a paradise for nature lovers. The ideal time to visit is after the monsoon, from September to February. Activities include trekking to the base, taking photographs, and visiting the nearby temple dedicated to Lord Buddha.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/3/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            
            <div class="row2 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Kanke-Dam.jpeg" alt="Kanke Dam" title="Kanke Dam">
                    </div>
                    <div class="detail">
                        <h2>Kanke Dam</h2>
                        <p>For those who appreciate the tranquility of lakes, Kanke Dam is a famous place to visit in Ranchi, where you can unwind and take in the scenery. It’s an ideal location for couples, families, and solo adventurers alike. The winter months are the best time to go. Activities include boating, lounging by the lake, and enjoying breathtaking sunset views.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/4/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Nakshatra-Van.jpeg" alt="Nakshatra Van" title="Nakshatra Van">
                    </div>
                    <div class="detail detail2">
                        <h2>Nakshatra Van</h2>
                        <p>Have you ever imagined what a zodiac-themed garden would look like? Nakshatra Van is among the best places to visit in Ranchi, seamlessly blending science, spirituality, and nature. Designed according to Vedic astrology, the park features trees that correspond to various Nakshatras. The park is organized into sections that represent astrological signs, with lush greenery, enhancing its appeal. Whether you believe in astrology or are just seeking a peaceful getaway, this Ranchi tourist place is worth a visit.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/5/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/Rock-Garden.jpeg" alt="Rock Garden" title="Rock Garden">
                    </div>
                    <div class="detail detail3">
                        <h2>Rock Garden</h2>
                        <p>Constructed from the remnants of a dam, the Rock Garden is a well-known spot in Ranchi that beautifully combines creativity with natural beauty. The garden boasts rock-cut sculptures, lovely pathways, and an artificial waterfall, making it an ideal picnic destination. It’s one of the top places to visit in Ranchi, especially for watching the sunset. The best time to go is from November to February when the weather is delightful. You can explore the artistic sculptures, unwind by the lake, and capture stunning sunset views.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/6/index.php" class="button">Explore Now</a>
                    </div>
                </div>
                
            </div>

            <div class="row3 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Sun-Temple.jpeg" alt="Sun Temple" title="Sun Temple">
                    </div>
                    <div class="detail">
                        <h2>Sun Temple</h2>
                        <p>The Sun Temple, resembling a massive chariot, is a hidden place to go in Ranchi that truly deserves your visit. Its distinctive architecture and tranquil atmosphere provide a perfect retreat for those looking for spiritual solace. Nestled in lush greenery, it’s an ideal spot for anyone seeking peace. The optimal time to visit is between November and March, when you can explore the temple's design and soak in the serene environment.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/7/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Birsa-Zoological-Park.jpeg" alt="Birsa Zoological Park" title="Birsa Zoological Park">
                    </div>
                    <div class="detail">
                        <h2>Birsa Zoological Park</h2>
                        <p>Animal enthusiasts are up for a treat! Birsa Zoological Park is a Ranchi sightseeing place where you can see deer, leopards, elephants, and more. This well-kept zoo provides a natural environment for various species. The optimal time to visit is between October and March. You can enjoy activities like spotting animals, taking nature walks, and capturing wildlife photographs.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/8/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/patratu-valley.png" alt="patratu valley" title="Patratu Valley">
                    </div>
                    <div class="detail">
                        <h2>Patratu Valley</h2>
                        <p>Patratu Valley is one of the most breathtaking locations in Jharkhand, known for its winding roads, lush green hills, and mesmerizing scenic beauty. Located about 40 km from Ranchi, the valley offers an unforgettable journey with its serpentine roads and panoramic views. The drive through Patratu Valley is an experience in itself, attracting nature lovers, photographers, and adventure seekers who come to enjoy the picturesque landscape.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/9/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>