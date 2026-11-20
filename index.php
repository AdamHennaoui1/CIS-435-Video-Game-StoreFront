<!--homepage - before login -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Game Store Welcomes You! </title>

    <!-- link to css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<!-- Navigation/Search bar -->
<header>
    <nav>
        <div class="logo">
            <h1>Game Store</h1>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="games.php">About</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </nav>
</header>

<!-- Welcome message -->
<section class="welcome">
<div class="welcome-message">
    <h1>Welcome to Game Store! Your one-stop destination for the latest and greatest games.</h1>
    <p>Welcome to GameStore, your ultimate gaming destination for discovering, collecting, and enjoying your favorite games. Create an account and become apart of our gaming community!   
    </p>
<div class="welcome-buttons">
    <a href="register.php" class="primary-btn">Register Now!</a>
    <a href="login.php" class="secondary-btn">Login</a>
</div>

</section>

<!-- About section -->
<section class="about" id="about">
    <h2>About Game Store</h2>
    <p>GameStore is a premier online platform that brings together gamers from around the world. Our mission is to provide a seamless and enjoyable gaming experience for all enthusiasts. Whether you're a casual player or a hardcore gamer, GameStore has something for everyone. Our platform allows gamers a simple way to explore games, manager their personal game libaray, and enjoy their gaming experience.
    </p>
</section>

<!-- Features section -->
<section class="features">
    <h2> What GameStore Offers</h2>
    <div class="feature-container">
        <div class="feature-box">
            <h3>Game Library</h3>
            <p>Explore a vast collection of games across various genres. From action-packed adventures to immersive role-playing experiences, GameStore has it all.
            </p>
        </div>
        <div class="feature-box">
            <h3>Personal Library</h3>
            <p>Manage your own collection of games with our easy-to-use personal library.
            </p>
        </div>
        <div class="feature-box">
            <h3>Easy Shopping</h3>
            <p>Enjoy a seamless shopping experience with our user-friendly interface and fast checkout process.
            </p>
        </div>
    </div>
</section>

<!-- Join/register section -->
<section class="join">
    <h2>Join GameStore Today!</h2>
    <p>Don't miss out on the latest games and exclusive offers. Sign up now and become a part of our gaming community.</p>
    <a href="register.php" class="primary-btn">Register Now!</a>
</section>

<!-- footer section/credit -->
<footer>
    <p>&copy; 2026 GameStore. All rights reserved to Zeinab Alsafi, Adam El-Hennaoui, + Kileigh Spencer </p>
</footer>

<!-- link javascript file -->
<script src="js/script.js"></script>

</body>
</html>
