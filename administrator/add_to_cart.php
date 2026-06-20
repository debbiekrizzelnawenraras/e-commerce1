<?php
session_start();
require_once "db.php";

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$qty = $_POST['quantity'] ?? 1;

// Check if already in cart
$stmt = $conn->prepare("SELECT * FROM cart WHERE user_id=? AND product_id=?");
$stmt->execute([$user_id, $product_id]);
$item = $stmt->fetch();

if($item){
    $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + ? WHERE id=?");
    $stmt->execute([$qty, $item['id']]);
} else {
    $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $product_id, $qty]);
}

header("Location: cart.php");
exit;
?>