<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: admin_login.php");
    exit();
}

include '../db.php';
include 'header.php';
include 'sidebar.php';

$success = "";
$error = "";

// Handle delete
if(isset($_GET['delete_id'])){
    $delete_id = (int)$_GET['delete_id'];

    // Fetch image to delete from server
    $stmt = $conn->prepare("SELECT image FROM gadgets WHERE id=?");
    $stmt->execute([$delete_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if($product){
        if($product['image'] && file_exists('../uploads/'.$product['image'])){
            unlink('../uploads/'.$product['image']);
        }
        $stmt = $conn->prepare("DELETE FROM gadgets WHERE id=?");
        if($stmt->execute([$delete_id])){
            $success = "Product deleted successfully!";
        } else {
            $error = "Failed to delete product!";
        }
    }
}

// Fetch all products
$stmt = $conn->query("SELECT * FROM gadgets ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5 offset-md-2 col-md-10">
    <h2>All Gadgets</h2>
    <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <?php if($success) echo "<div class='alert alert-success'>$success</div>"; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if($products): ?>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td><?= htmlspecialchars($product['brand']) ?></td>
                        <td>₱ <?= $product['price'] ?></td>
                        <td><?= $product['stock'] ?></td>
                        <td>
                            <?php if($product['image']): ?>
                                <img src="../uploads/<?= htmlspecialchars($product['image']) ?>" width="80">
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="update_product.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-primary mb-1">Edit</a>
                            <a href="view_products.php?delete_id=<?= $product['id'] ?>" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Delete this product?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center">No products found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>