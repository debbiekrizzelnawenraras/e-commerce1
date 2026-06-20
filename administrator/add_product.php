<?php
require_once __DIR__ . '/../auth/auth_check.php';
require_once __DIR__ . '/../auth/db.php';

/* GET CATEGORIES */
$categories = $conn->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

$message = '';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category_id = $_POST['category_id'];

    $imageName = null;

    /* IMAGE UPLOAD */
    if(!empty($_FILES['image']['name'])){

        $imageName = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $imageName);
    }

    $stmt = $conn->prepare("
        INSERT INTO products(name, price, stock, image, category_id)
        VALUES(?,?,?,?,?)
    ");

    $stmt->execute([
        $name,
        $price,
        $stock,
        $imageName,
        $category_id
    ]);

    $message = "Product added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            height: 100vh;
            width: 240px;
            position: fixed;
            background: #111827;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display:block;
            padding:12px;
            color:#cbd5e1;
            text-decoration:none;
        }

        .sidebar a:hover {
            background:#1f2937;
            color:white;
        }

        .main {
            margin-left:240px;
            padding:20px;
        }

        .card-box {
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<!-- SIDEBAR (same as dashboard) -->
<div class="sidebar">
    <h4 class="text-center mb-4">ADMIN PANEL</h4>

    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="products.php">📦 Products</a>
    <a href="add_product.php">➕ Add Product</a>
    <a href="categories.php">📂 Categories</a>
    <a href="#">👤 Profile</a>
    <a href="../auth/logout.php">🚪 Logout</a>
</div>

<!-- MAIN -->
<div class="main">

    <h2>Add Product</h2>

    <?php if($message): ?>
        <div class="alert alert-success"><?= $message ?></div>
    <?php endif; ?>

    <div class="card-box">

        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Product Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php foreach($categories as $cat): ?>
                        <option value="<?= $cat['id'] ?>">
                            <?= $cat['category_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Product Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">
                Add Product
            </button>

        </form>

    </div>

</div>

</body>
</html>