
<?php
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Return to homepage
header("Location: index.php");
exit;
?>
