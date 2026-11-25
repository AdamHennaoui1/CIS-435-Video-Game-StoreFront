<!-- session_start() is included in header.php, so we don't need to include it here again -->
<!-- Connect to our database -->
 
 <?php
require_once 'database/connection.php';
$success = isset($_GET['success']) && $_GET['success'] == 1;

session_start();

// Connect to our database
require_once 'database/connection.php';

// Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get the logged-in user's ID
$user_id = $_SESSION['user_id'];

// Get games purchased by this user
$stmt = $db->prepare("
    SELECT games.*
    FROM games
    JOIN purchases ON games.id = purchases.game_id
    WHERE purchases.user_id = ?
");

$stmt->execute([$user_id]);
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<?php include 'header.php'; ?>
<!-- Library welcome section -->
<section class="welcome">
    <div class="welcome-message">
        <h1>My Game Library</h1>
        <p>View all the games you have purchased from Game Garage!</p>
    </div>
</section>

<!-- Purchased games section -->
<section class="games">
    <h2>My Purchased Games</h2>

    <div class="game-container">

        <!-- Check if the library is empty -->
        <?php if (empty($games)): ?>

            <p>You haven't purchased any games yet.</p>

        <?php else: ?>

            <!-- Display purchased games -->
            <?php foreach ($games as $game): ?>
                <div class="game-card">
                    <h3><?php echo htmlspecialchars($game['title']); ?></h3>
                    <p>Genre: <?php echo htmlspecialchars($game['genre']); ?></p>
                    <p>Platform: <?php echo htmlspecialchars($game['platform']); ?></p>
                    <p>Price: $<?php echo number_format($game['price'], 2); ?></p>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>

</body>
</html>
