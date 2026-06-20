<?php
// One-time use to generate hashed password
$password = "administrator2025";
echo password_hash($password, PASSWORD_DEFAULT);
?>