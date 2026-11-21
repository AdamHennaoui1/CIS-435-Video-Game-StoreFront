
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Game Garage | Register</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<!-- IMPORTANT: auth-page connects your dark background CSS -->
<body class="auth-page">

    <div class="auth-container">

        <a href="index.php" class="auth-logo">
            <i class="fa-solid fa-gamepad"></i>
            Game Garage
        </a>

        <div class="auth-card">

            <div class="auth-header">

                <i class="fa-solid fa-user-plus"></i>

                <h1>Create Account</h1>

                <p>Join the Game Garage community!</p>

            </div>

            <form action="register.php" method="POST">

                <div class="input-group">
                    <label for="username">Username</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-user"></i>

                        <input type="text"
                        id="username"
                        name="username"
                        placeholder="Choose a username"
                        required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-envelope"></i>

                        <input type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock"></i>

                        <input type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                        required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>

                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock"></i>

                        <input type="password"
                        id="confirm_password"
                        name="confirm_password"
                        placeholder="Confirm your password"
                        required>
                    </div>
                </div>

                <button type="submit" class="auth-button">
                    Create Account
                </button>

            </form>

            <div class="auth-footer">

                <p>
                    Already have an account?
                    <a href="login.php">Log in here</a>
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
