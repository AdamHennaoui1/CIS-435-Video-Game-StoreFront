<?php 
session_start();
require_once 'database/connection.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$game_id = $_POST['game_id'] ?? '';
if(empty($game_id)) {
    die("No game was selected.");
}

$stmt = $db->prepare("SELECT * FROM games WHERE id = ?");
$stmt->execute([$game_id]);
$game = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$game) {
    die("Game not found.");
}

$user_id = $_SESSION['user_id'];
$stmt = $db->prepare("SELECT * FROM purchases WHERE user_id = ? AND game_id = ?");
$stmt->execute([$user_id, $game_id]);
if ($stmt->rowCount() > 0) {
    die("You already own this game.");
}
try {
$stmt = $db->prepare("INSERT INTO purchases (user_id, game_id) VALUES (?, ?)");
 ($stmt->execute([$user_id, $game_id]));
    echo "Purchase successful! You now own " . htmlspecialchars($game['title']) . ".";
} catch (PDOException $e) {
    echo "There was an error processing your purchase. Please try again.";
}


?>