<?php
session_start();
require_once __DIR__ . "/../auth/db.php";
require_once __DIR__ . "/../auth/auth_check.php";
require_role('admin');

$page_title = "Update Product";
$error = "";
$success = "";

// Fetch products and categories
$products = $conn->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
$categories = $conn->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

// Update product
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = intval($_POST['id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    $price = floatval($_POST['price'] ?? 0);
    $stock = intval($_POST['stock'] ?? 0);
    $category_id = intval($_POST['category_id'] ?? 0);

    if(!$id || !$name || $price <= 0 || $stock < 0 || !$category_id){
        $error = "Please fill in all fields correctly.";
    } else {
        $stmt = $conn->prepare("UPDATE products SET name=?, price=?, stock=?, category_id=? WHERE id=?");
        if($stmt->execute([$name,$price,$stock,$category_id,$id])){
            $success = "Product updated successfully!";
            $products = $conn->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $error = "Failed to update product.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { display:flex; min-height:100vh; margin:0; font-family:'Inter', sans-serif; background:#f8f9fa;}
.sidebar { width:220px; background:#2f3e4e; color:white; flex-shrink:0; min-height:100vh;}
.sidebar a { color:white; display:block; padding:12px 20px; text-decoration:none;}
.sidebar a:hover, .sidebar a.active { background:#1d2a36; }
.content { flex-grow:1; padding:20px; }
.card { background:white; padding:20px; border-radius:10px; margin-bottom:20px; }
</style>
</head>
<body>
<div class="sidebar">
    <div class="text-center mb-4">
        <img src="../assets/admin-avatar.png" width="80" class="img-fluid rounded-circle">
        <h5 class="mt-2">ADMIN</h5>
    </div>
    <a href="dashboard.php">Dashboard</a>
    <a href="add_product.php">Add Product</a>
    <a href="update_product.php" class="active">Update Product</a>
    <a href="add_category.php">Add Category</a>
    <a href="profile.php">Profile</a>
    <a href="../auth/logout.php">Logout</a>
</div>
<div class="content">
    <h2>Update Products</h2>

    <?php if($error): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
    <?php if($success): ?><div class="alert alert-success"><?= htmlspecialchars($success) ?></div><?php endif; ?>

    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($products as $p): ?>
                <tr>
                    <form method="POST">
                        <td><?= $p['id'] ?><input type="hidden" name="id" value="<?= $p['id'] ?>"></td>
                        <td><input type="text" name="name" value="<?= htmlspecialchars($p['name']) ?>" class="form-control"></td>
                        <td><input type="number" step="0.01" name="price" value="<?= $p['price'] ?>" class="form-control"></td>
                        <td><input type="number" name="stock" value="<?= $p['stock'] ?>" class="form-control"></td>
                        <td>
                            <select name="category_id" class="form-control">
                                <?php foreach($categories as $c): ?>
                                    <option value="<?= $c['id'] ?>" <?= ($c['id']==$p['category_id'])?'selected':'' ?>><?= htmlspecialchars($c['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td><button class="btn btn-primary btn-sm">Update</button></td>
                    </form>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>