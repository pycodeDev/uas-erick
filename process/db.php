<?php
define('BASE_URL', 'http://uas-erick.test/');

$host = 'localhost';
$dbname = 'uas_db';
$username = 'root';
$password = '12345678';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function base_url($path = '') {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $base = $protocol . "://" . $host . dirname($_SERVER['SCRIPT_NAME']);
    return rtrim($base, '/') . '/' . ltrim($path, '/');
}
?>
