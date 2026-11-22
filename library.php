<?php
session_start();

// Connect to our database
require_once 'database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Garage | My Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Navigation bar -->
<header>
    <nav class="navbar">
        <div class="logo">
            <h1>Game Garage</h1>
        </div>

        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="store.php">Store</a>
            <a href="library.php">My Library</a>
            <a href="dashboard.php">Dashboard</a>
        </div>
    </nav>
</header>

<!-- Library welcome section -->
<section class="welcome">
    <div class="welcome-message">
        <h1>My Game Library</h1>
        <p>View all the games you have purchased from Game Garage!</p>
    </div>
</section>