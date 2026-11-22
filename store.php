<?php
session_start();

// Connect to our database
require_once 'database/connection.php';

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

    <div class="game-container">
        <!-- Display games from the database -->
<?php foreach ($games as $game): ?>
    <div class="game-card">
        <h3><?php echo htmlspecialchars($game['title']); ?></h3>
        <p>Genre: <?php echo htmlspecialchars($game['genre']); ?></p>
        <p>Platform: <?php echo htmlspecialchars($game['platform']); ?></p>
        <p>Price: $<?php echo number_format($game['price'], 2); ?></p>
        <!-- Purchase button -->
<button class="purchase-btn" type="button">Purchase</button>
    </div>
<?php endforeach; ?>

    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>

</body>
</html>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>

</body>
</html>