

<?php
session_start();
require_once 'database/connection.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        session_regenerate_id(true);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: store.php");
        exit;

    } else {
        $error = "Incorrect username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Garage | Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="auth-page">

    <div class="auth-container">

        <a href="index.php" class="auth-logo">
            <i class="fa-solid fa-gamepad"></i>
            Game Garage
        </a>

        <div class="auth-card">

            <div class="auth-header">
                <i class="fa-solid fa-user-circle"></i>
                <h1>Welcome Back!</h1>
                <p>Log in to your Game Garage account</p>
            </div>

            <?php if ($error !== ""): ?>
                <p class="error-message">
                    <?php echo htmlspecialchars($error); ?>
                </p>
            <?php endif; ?>

            <form action="login.php" method="POST">

                <div class="input-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="username" name="username"
                               placeholder="Enter your username" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password"
                               placeholder="Enter your password" required>
                    </div>
                </div>

                <button type="submit" class="auth-button">
                    Log In
                </button>

            </form>

            <div class="auth-footer">
                <p>
                    Don't have an account?
                    <a href="register.php">Create one here</a>
                </p>

                <a href="index.php" class="back-home">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Home
                </a>
            </div>

        </div>
    </div>

</body>
</html>
