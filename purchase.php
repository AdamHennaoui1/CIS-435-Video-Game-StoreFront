<?php 
session_start();
require_once 'database/connection.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>