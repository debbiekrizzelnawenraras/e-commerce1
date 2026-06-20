<?php
require_once __DIR__ . "/../auth/auth_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            height: 100vh;
            background: #111827;
            color: white;
            position: fixed;
            width: 240px;
            padding-top: 20px;
        }

        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: white;
        }

        .main {
            margin-left: 240px;
            padding: 20px;
        }

        .card-box {
            border-radius: 12px;
            color: white;
            padding: 20px;
        }

        .bg-blue { background: #2563eb; }
        .bg-green { background: #16a34a; }
        .bg-orange { background: #f97316; }
        .bg-red { background: #dc2626; }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4">ADMIN PANEL</h4>

    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="products.php">📦 Products</a>
    <a href="add_product.php">➕ Add Product</a>
    <a href="#">📂 Categories</a>
    <a href="#">👤 Profile</a>
    <a href="../auth/logout.php">🚪 Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <h2>Dashboard</h2>
    <p>Welcome 
        <!-- <?= $_SESSION['']; ?>-->
          👋</p> 

    <div class="row mt-4">

        <div class="col-md-3">
            <div class="card-box bg-blue">
                <h5>Total Products</h5>
                <?php
                require_once __DIR__ . "/../auth/db.php";
                $count = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();
                echo "<h2>$count</h2>";
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-green">
                <h5>Users</h5>
                <?php
                $count = $conn->query("SELECT COUNT(*) FROM users")->fetchColumn();
                echo "<h2>$count</h2>";
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-orange">
                <h5>Orders</h5>
                <?php
                echo "<h2>0</h2>"; // placeholder
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-red">
                <h5>Revenue</h5>
                <?php
                echo "<h2>₱0</h2>"; // placeholder
                ?>
            </div>
        </div>

    </div>

</div>

</body>
</html>