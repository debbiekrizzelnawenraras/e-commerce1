<?php
require_once __DIR__ . '/../auth/auth_check.php';
require_once __DIR__ . '/../auth/db.php';

$stmt = $conn->query("
    SELECT p.*, c.name AS category_name
    FROM products p
    LEFT JOIN categories c ON p.category_id = c.id
");

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* SIDEBAR (same as dashboard) */
        .sidebar {
            height: 100vh;
            width: 240px;
            position: fixed;
            background: #111827;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #cbd5e1;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 240px;
            padding: 20px;
        }

        /* CARD STYLE (same dashboard style) */
        .card-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        /* PRODUCT IMAGE */
        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .top-bar {
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
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

    <div class="top-bar">
        <h2>Products</h2>

        <a href="add_product.php" class="btn btn-primary">
            + Add Product
        </a>
    </div>

    <div class="card-box">

        <table class="table table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
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

                    <td><?= $p['id'] ?></td>

                    <td>
                        <?php if(!empty($p['image'])): ?>
                            <img src="../uploads/<?= $p['image'] ?>" class="product-img">
                        <?php else: ?>
                            <span class="text-muted">No Image</span>
                        <?php endif; ?>
                    </td>

                    <td><?= $p['name'] ?></td>
                    <td>₱<?= $p['price'] ?></td>
                    <td><?= $p['stock'] ?></td>

                    <td><?= $p['category_name'] ?? 'No Category' ?></td>

                    <td>
                        <a href="update_product.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="delete_product.php?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Delete this product?')">
                            Delete
                        </a>
                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>