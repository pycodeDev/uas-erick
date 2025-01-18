<?php
require 'process/db.php'; // Pastikan fungsi base_url tersedia

header("Location: " . base_url('process/login.php'));
exit();
?>