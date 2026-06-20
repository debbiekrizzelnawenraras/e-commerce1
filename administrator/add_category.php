<?php
session_start();
require_once __DIR__ . "/../auth/db.php";
require_once __DIR__ . "/../auth/auth_check.php";
require_role('admin');

$page_title = "Add Category";
$error = "";
$success = "";

// Add new category
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name'] ?? '');
    if(!$name){
        $error = "Category name cannot be empty.";
    } else {
        $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
        if($stmt->execute([$name])){
            $success = "Category added successfully!";
        } else {
            $error = "Failed to add category.";
        }
    }
}

// Fetch all categories
$categories = $conn->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { display:flex; min-height:100vh; margin:0; font-family:'Inter',sans-serif; background:#f8f9fa;}
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
    <a href="update_product.php">Update Product</a>
    <a href="add_category.php" class="active">Add Category</a>
    <a href="profile.php">Profile</a>
    <a href="../auth/logout.php">Logout</a>
</div>
<div class="content">
    <h2>Add Category</h2>
    <?php if($error): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
    <?php if($success): ?><div class="alert alert-success"><?= htmlspecialchars($success) ?></div><?php endif; ?>
    <div class="card">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Add Category</button>
        </form>
    </div>

    <div class="card">
        <h4>Existing Categories</h4>
        <ul>
            <?php foreach($categories as $c): ?>
                <li><?= htmlspecialchars($c['name']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>