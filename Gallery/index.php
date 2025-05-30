<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourists Spot|Gallery</title>
  <link rel="icon" type="image/x-icon"  href="../assets/explore-now.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
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
                    <a href="../home/index.php">Home</a>
                </div>
                <div class="places redirect">
                    <button class="toggle">Places
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                    <div class="options">
                        <a href="../Places/Ranchi/index.php">Ranchi</a>
                        <a href="../Places/Dhanbad/index.php">Dhanbad</a>
                        <a href="../Places/Deoghar/index.php">Deoghar</a>
                        <a href="../Places/Hazaribagh/index.php">Hazaribagh</a>
                        <a href="../Places/Jamshedpur/index.php">Jamshedpur</a>
                    </div>
                </div>
                <div class="gallery redirect">
                    <a href="./index.php">Gallery</a>
                </div>
                
                <div class="logout redirect">
                    <form action="./php/logout.php" method="POST">
                        <button class="logout-button" type="submit">Log Out</button>
                    </form>
                </div>

            </div>
        </div>

 <div class="grid-container">

  <div class="box" style="grid-area:box-1">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 1.avif" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-2">
    <a href="../Places/Deoghar/details/2/index.php">
      <img src="../assets/test-images-for-grid/image 2.jpg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-3">
    <a href="../Places/Jamshedpur/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 3.avif" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-4">
    <a href="../Places/Jamshedpur/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 4.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-5">
    <a href="../Places/Ranchi/details/8/index.php">
      <img src="../assets/test-images-for-grid/image 5.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-6">
    <a href="../Places/Jamshedpur/details/9/index.php">
      <img src="../assets/test-images-for-grid/image 6.png" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-7">
    <a href="../Places/Jamshedpur/details/3/index.php">
      <img src="../assets/test-images-for-grid/image 7.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-8">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 8.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-9">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 9.jpg" alt="">
    </a>
  </div>
  
  <!------------------------------------------------------------->
  <div class="box" style="grid-area:box-10">
    <a href="../Places/Jamshedpur/details/5/index.php">
      <img src="../assets/test-images-for-grid/image 10.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-11">
    <a href="../Places/Hazaribagh/details/2/index.php">
      <img src="../assets/test-images-for-grid/image 11.png" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-12">
    <a href="../Places/Jamshedpur/details/6/index.php">
      <img src="../assets/test-images-for-grid/image 12.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-13">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 13.png" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-14">
    <a href="../Places/Ranchi/details/2/index.php">
      <img src="../assets/test-images-for-grid/image 14.jpg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-15">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 15.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-16">
    <a href="../Places/Dhanbad/details/2/index.php">
      <img src="../assets/test-images-for-grid/image 16.avif" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-17">
    <a href="../Places/Ranchi/details/3/index.php">
      <img src="../assets/test-images-for-grid/image 17.jpeg" alt="">
    </a>
  </div>
  
  <div class="box" style="grid-area:box-18">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 18.jpg" alt="">
    </a>
  </div>
  
  <!----------------------------------------------------------------->
  
  <div class="box" style="grid-area:box-19">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 19.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-20">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 20.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-21">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 21.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-22">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 22.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-23">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 23.avif" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-24">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 24.avif" alt="">
    </a>
  </div>
  <div class="box" style="grid-area:box-25">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 25.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-26">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 26.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-27">
    <a href="../Places/Deoghar/details/5/index.php">
      <img src="../assets/test-images-for-grid/image 27.png" alt="">
    </a>
  </div>

  <!----------------------------------------------------------------->

  <div class="box" style="grid-area:box-19">
    <a href="../Places/Hazaribagh/details/3/index.php">
      <img src="../assets/test-images-for-grid/image 28.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-20">
    <a href="../Places/Deoghar/details/6/index.php">
      <img src="../assets/test-images-for-grid/image 29.avif" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-21">
    <a href="../Places/Ranchi/details/9/index.php">
      <img src="../assets/test-images-for-grid/image 30.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-22">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 31.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-23">
    <a href="../Places/Ranchi/details/6/index.php">
      <img src="../assets/test-images-for-grid/image 32.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-24">
    <a href="../Places/Jamshedpur/details/8/index.php">
      <img src="../assets/test-images-for-grid/image 33.png" alt="">
    </a>
  </div>
  <div class="box" style="grid-area:box-25">
    <a href="../Places/Deoghar/details/3/index.php">
      <img src="../assets/test-images-for-grid/image 34.avif" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-26">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 35.png" alt="">
    </a>
  </div>

  <!-- <div class="box" style="grid-area:box-27">
    <img src="../assets/test-images-for-grid/image 36.jpeg" alt="">
  </div> -->

  <!----------------------------------------------------------------->
 

  <div class="box" style="grid-area:box-28">
    <a href="../Places/Ranchi/details/7/index.php">
      <img src="../assets/test-images-for-grid/image 37.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-29">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 38.jpeg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-30">
    <a href="../Places/Hazaribagh/details/6/index.php">
      <img src="../assets/test-images-for-grid/image 39.png" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-31">
    <a href="../Places/Dhanbad/details/6/index.php">
      <img src="../assets/test-images-for-grid/image 40.avif" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-32">
    <a href="../Places/Dhanbad/details/3/index.php">
      <img src="../assets/test-images-for-grid/image 41.jpg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-33">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 42.jpg" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-34">
    <a href="../Places/Deoghar/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 43.avif" alt="">
    </a>
  </div>

  <div class="box" style="grid-area:box-35">
    <a href="../Places/Hazaribagh/details/1/index.php">
      <img src="../assets/test-images-for-grid/image 44.png" alt="">
    </a>
  </div>
  
    <script src="script.js"></script>
</div> 
</body>
</html>