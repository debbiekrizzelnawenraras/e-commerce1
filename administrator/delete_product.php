<?php
include __DIR__ . "/../auth/auth_check.php";
include __DIR__ . "/../auth/db.php";

if(!isset($_GET['id'])){
    die("Missing ID");
}

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->execute([$_GET['id']]);

header("Location: products.php");
exit;
?>