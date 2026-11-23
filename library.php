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

<!-- Library welcome section -->
<section class="welcome">
    <div class="welcome-message">
        <h1>My Game Library</h1>
        <p>View all the games you have purchased from Game Garage!</p>
    </div>
</section>

<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>