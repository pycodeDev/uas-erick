<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: " . base_url('process/login.php'));
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
    <title>Main Page</title>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?= htmlspecialchars($username); ?>!</h1>
        <a href="<?= base_url('php/logout.php'); ?>">Logout</a>
    </div>
</body>
</html>
