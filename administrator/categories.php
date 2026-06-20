<?php
require_once __DIR__ . '/../auth/auth_check.php';
require_once __DIR__ . '/../auth/db.php';

/* =========================
   DELETE CATEGORY
========================= */
if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM categories WHERE id=?");
    $stmt->execute([$id]);

    header("Location: categories.php");
    exit;
}

/* =========================
   ADD CATEGORY
========================= */
if(isset($_POST['submit'])){

    $name = trim($_POST['name']);

    if($name != ''){

        $stmt = $conn->prepare("
            INSERT INTO categories(name)
            VALUES(?)
        ");

        $stmt->execute([$name]);
    }
}

/* =========================
   FETCH CATEGORIES
========================= */
$categories = $conn->query("
    SELECT * FROM categories ORDER BY id DESC
")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* SIDEBAR */
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

        .card-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
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
    <a href="profile.php">👤 Profile</a>
    <a href="../auth/logout.php">🚪 Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <h2>Categories</h2>

    <!-- ADD CATEGORY -->
    <div class="card-box mb-4">

        <form method="POST" class="d-flex gap-2">

            <input type="text"
                   name="name"
                   class="form-control"
                   placeholder="Enter category name"
                   required>

            <button class="btn btn-primary" name="submit">
                Add Category
            </button>

        </form>

    </div>

    <!-- CATEGORY LIST -->
    <div class="card-box">

        <table class="table table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach($categories as $c): ?>

                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['name'] ?></td>
                    <td>
                        <a href="categories.php?delete=<?= $c['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this category?')">
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