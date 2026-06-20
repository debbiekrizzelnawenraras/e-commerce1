<?php
include 'db.php';

$stmt = $conn->prepare("
SELECT cart.id, gadgets.name, gadgets.price, cart.quantity
FROM cart
JOIN gadgets ON cart.product_id = gadgets.id
");

$stmt->execute();
$cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Your Cart</h2>

<?php foreach($cart as $item): ?>

<p>
<?php echo $item['name']; ?> -
₱<?php echo $item['price']; ?> -
Qty: <?php echo $item['quantity']; ?>
</p>

<?php endforeach; ?>

<a href="checkout.php">Checkout</a>