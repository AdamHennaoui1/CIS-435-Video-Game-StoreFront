
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <nav class="navbar">

        <div class="logo">
            <h1>Game Garage</h1>
        </div>

        <div class="nav-links">
            <a href="store.php">Store</a>
            <a href="library.php">My Library</a>
            <a href="profile.php">Profile</a>
        </div>

    </nav>
</header>
