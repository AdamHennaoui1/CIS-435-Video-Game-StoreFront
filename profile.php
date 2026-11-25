
<?php
session_start();
require_once 'database/connection.php';

// Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// Get username
$username = $_SESSION['username'];

// Count games owned by the user
$stmt = $db->prepare(
    "SELECT COUNT(*) FROM purchases WHERE user_id = ?"
);

$stmt->execute([$_SESSION['user_id']]);
$game_count = $stmt->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Game Garage | Profile</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<?php include 'header.php'; ?>

<main class="profile-page">

    <section class="profile-card">

        <div class="profile-icon">
            <i class="fa-solid fa-user-circle"></i>
        </div>

        <h1>My Profile</h1>

        <div class="profile-info">

            <div class="profile-item">
                <i class="fa-solid fa-user"></i>

                <div>
                    <h3>Username</h3>
                    <p><?php echo htmlspecialchars($username); ?></p>
                </div>
            </div>

            <div class="profile-item">
                <i class="fa-solid fa-gamepad"></i>

                <div>
                    <h3>Games Owned</h3>
                    <p><?php echo (int)$game_count; ?></p>
                </div>
            </div>

        </div>

        <a href="logout.php" class="logout-button">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </section>

</main>

<footer>
    <p>&copy; 2026 Game Garage. All rights reserved.</p>
</footer>

</body>
</html>
