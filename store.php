<?php
session_start();

require_once 'database/connection.php';

// Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// Get all games from the database
$games = $db->query("SELECT * FROM games")->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Garage | Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'header.php'; ?>

<!-- Store welcome section -->
<section class="welcome">
    <div class="welcome-message">
        <h1>Game Store</h1>
        <p>Browse our collection of video games and find your next favorite game!</p>
    </div>
</section>

<!-- Available games section -->
<section class="games">
    <h2>Available Games</h2>

    <!-- Search bar -->
<input type="text" id="searchInput"
       placeholder="Search games..."
       oninput="searchGames()">

    <div class="game-container">
        <!-- Display games from the database -->
<?php foreach ($games as $game): ?>
    <div class="game-card">
        <h3><?php echo htmlspecialchars($game['title']); ?></h3>
        <p>Genre: <?php echo htmlspecialchars($game['genre']); ?></p>
        <p>Platform: <?php echo htmlspecialchars($game['platform']); ?></p>
        <p>Price: $<?php echo number_format($game['price'], 2); ?></p>
<!-- Buy Button -->
<form action="purchase.php" method="POST">
    <input type="hidden" name="game_id" value="<?php echo $game['id']; ?>">
    <button class="purchase-btn" type="submit">Buy</button>
</form>
    </div>
<?php endforeach; ?>

    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>

<!-- Link JavaScript file -->
<script src="js/script.js"></script>

</body>
</html>