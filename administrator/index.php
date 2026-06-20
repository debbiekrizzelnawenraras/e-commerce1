<?php
include 'db.php';

$stmt = $conn->prepare("SELECT * FROM gadgets");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Gadget Store</h1>

<?php foreach($products as $product): ?>

<div style="border:1px solid #ccc; padding:10px; margin:10px;">
    
<h3>
<?php echo $product['name']; 
?>
</h3>

<p>Brand: <?php echo $product['brand']; ?></p>

<p>Price: ₱<?php echo $product['price']; ?></p>

<p><?php echo $product['description']; ?></p>

<form action="add_to_cart.php" method="POST">
<input type="hidden" name="id" value="<?php echo $product['id']; ?>">
<input type="number" name="qty" value="1">
<button type="submit">Add to Cart</button>
</form>

</div>

<?php endforeach; ?>

<a href="cart.php">View Cart</a>