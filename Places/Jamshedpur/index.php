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
    <title>Tourist Spots|Jamshedpur</title>
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
                    <button class="toggle ">Jamshedpur
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </button>
                    <div class="options ">
                        <a href="../Dhanbad/index.php">Dhanbad</a>
                        <a href="../Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../deoghar/index.php">Deoghar</a>
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
                    <h1>WELCOME TO JAMSHEDPUR</h1>
                    <h3>The Steel City where industry meets nature, forging progress with greenery.</h3>
                    <p>Jamshedpur, tagged as the “Steel City of India” is much more than being an industrial city of the country. Tucked in some greenery, hills, and lovely lakes, this city has many endowments that attract visitors and fuse the appeal of nature and industrialization well. Irrespective of whether you are an adventurer, a heritage lover or a nature lover or you are just in search of some peace and tranquility that this place has to offer. So Let's visit some beautiful places in this city!</p>
                </div>
            </div>

            <div class="row1 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Bhuvaneshwari-Temple.jpeg" alt="Bhuvaneshwari-Temple" title="Bhuvaneshwari Temple">
                    </div>
                    <div class="detail">
                        <h2>Bhuvaneshwari Temple</h2>
                        <p>If anyone looks to get in touch with their inner self then Bhuvaneshwari Temple is something you just cannot afford to miss in Jamshedpur among other places to visit in Jamshedpur. This temple built on the hill slope originally belonged to Goddess Bhuvaneshwari as well as providing a striking view of the city surroundings. It is one of the most suitable places in Jamshedpur for a spiritual break owing to the serene atmosphere and the beautiful location. </p>
                    </div>
                    <div class="go-to">
                        <a href="./details/1/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Jubilee-Park.jpeg" alt="Jubilee-Park" title="Jubilee Park">
                    </div>
                    <div class="detail">
                        <h2>Jubilee Park</h2>
                        <p>Located just in Jamshedpur city, it is well known as Mughal Gardens of Jamshedpur or also popular as Jubilee Park which represents the recreation garden of the city of Jamshedpur. It is as such ideal for families to relax or even to take a stroll at the compound away from the polluted environment. For those who are visiting during the period of the city’s Founder’s Day, one will also find the park at night sparkling with lights and is considered as the best place in Jamshedpur.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/2/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/Dalma-Wildlife-Sanctuary.jpeg" alt="Dalma-Wildlife-Sanctuary" title="Dalma Wildlife Sanctuary">
                    </div>
                    <div class="detail">
                        <h2>Dalma Wildlife Sanctuary</h2>
                        <p>Dalma Wildlife Sanctuary is among the must visit tourist places near Jamshedpur for all those interested in spending time in nature and watching wildlife. Some of the species found in this sanctuary are the elephants, the barking deer as well as the leopards. The sanctuary also provides trekking services for the people adventurous in making treks on the hills with the opportunity of taking around the city. Without any doubt, this is one of the best places to visit in Jamshedpur.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/3/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row2 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Kalamandir.png" alt="Kalamandir" title="Kalamandir">
                    </div>
                    <div class="detail">
                        <h2>Kalamandir</h2>
                        <p>The village has the eternal Rhythm of Manders of fascinating tribal culture and tradition. With the approach of the festive season, the place vibrates with performances that bring the tribes together in a colourful collage of dances, rituals and religious ceremonies.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/4/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Dimna-Lake.jpeg" alt="Dimna-Lake" title="Dimna Lake">
                    </div>
                    <div class="detail">
                        <h2>Dimna Lake</h2>
                        <p>Among other Jamshedpur places to visit, yet another favorite, Dimna lake is an artificial lake developed on the foothills of Dalma Hills in Jamshedpur and is among the best places to visit in Jamshedpur. Boating, picnicking and swimming amenities are there and thus can be said to be an excellent place to find some quiet time. This is one of the tranquil and beautiful lakes that are surrounded by trees as well as other water bodies. It is among Jamshedpur famous places.</p>
                    </div>
                    <div class="go-to">
                        <a href="./details/5/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/Hudco-Lake.jpeg" alt="Hudco-Lake" title="Hudco Lake">
                    </div>
                    <div class="detail">
                        <h2>Hudco Lake</h2>
                        <p>Jamshedpur famous place includes the Hudco lake. Located in the Telco area, Hudco Lake is the lesser-known tourist spot amidst the exotic Places to visit in Jamshedpur. The lake is located with hills and trees around and is perfect for photographers as well as for those who love to take a walk. Across the street there is a small park with benches, tables and a play area near the lake good for family outing. </p>
                    </div>
                    <div class="go-to">
                        <a href="./details/6/index.php" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row3 row">
                <div class="card card-first">
                    <div class="image">
                        <img src="./Assets/Sir-Dorabji-Tata-Park.jpeg" alt="Sir-Dorabji-Tata-Park" title="Sir Dorabji Tata Park">
                    </div>
                    <div class="detail">
                        <h2>Sir Dorabji Tata Park</h2>
                        <p>Sir Dorabji Tata Park is a small park which has been named after one of the founders of Tata Steel and is well manicured and very quiet in the middle of the city. In the case of people seeking a tranquil area for night strolling or just a place to relax while reading books this park would suit them. </p>
                    </div>
                    <div class="go-to">
                        <a href="./details/7/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-second">
                    <div class="image">
                        <img src="./Assets/Satnala(dobo)Dam.png" alt="Satnala Dam" title="Satnala Dam">
                    </div>
                    <div class="detail">
                        <h2>Satnala Dam</h2>
                        <p>Santala (Dobo) Dam is situated at around 10 km away from the City Bus Stand. The drive is pleasant through Marine river by the side of Subarnarekha river, crossing the river through new bridge and drive around 4 KM towards highway. The dam has been constructed amidst the hill and has a lovely view. There is a small hiking to reach the dam, which may be slightly tiring for Sr. Citizens. The lake, hills and surroundings offer attractive view and photo ops. </p>
                    </div>
                    <div class="go-to">
                        <a href="./details/8/index.php" class="button">Explore Now</a>
                    </div>
                </div>
    
                <div class="card card-third">
                    <div class="image">
                        <img src="./Assets/ChandilDam.png" alt="ChandilDam" title="Chandil Dam">
                    </div>
                    <div class="detail">
                        <h2>Chandil Dam</h2>
                        <p>The dam is located an hour's drive out of Jamshedpur, along NH33. The vast water body stretches out in the distance and the best part is the speed boating. Tickets are priced at Rs 150 per head for a five minute spin. Lifejackets are provided and the boat ride takes you out onto the Subarnarekha river, which is a great place for birdwatching.</p>
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