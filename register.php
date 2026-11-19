<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
</head>
<body>
    <form action="register.php" method="post">
        <label for="username"> Create Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password"> Create Password:</label> 
        <input type="password" id="password" name="password" required><br><br>
        <label for="email"> Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

        <input type="sumbit" value="Register">
    </form>
    <p> Already have an account? <a href="login.php">Login here</a>.</p>
</body>
</html> 