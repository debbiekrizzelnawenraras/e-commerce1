<?php
// Start session and require auth check
session_start();
require_once __DIR__ . "/../auth/auth_check.php";
require_role('admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title ?? "Admin Panel" ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    display: flex;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
    margin: 0;
    background-color: #f8f9fa;
}
.sidebar {
    width: 220px;
    background-color: #2f3e4e;
    color: white;
    flex-shrink: 0;
    min-height: 100vh;
}
.sidebar a {
    color: white;
    display: block;
    padding: 12px 20px;
    text-decoration: none;
}
.sidebar a:hover, .sidebar a.active {
    background-color: #1d2a36;
}
.content {
    flex-grow: 1;
    padding: 20px;
}
.header {
    margin-bottom: 20px;
}
.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}
.table thead th {
    background-color: #e9ecef;
}
</style>
</head>
<body>

<div class="sidebar d-flex flex-column p-3">
    <div class="text-center mb-4">
        <img src="../assets/admin-avatar.png" alt="Admin" class="img-fluid rounded-circle" width="80">
        <h5 class="mt-2">ADMIN</h5>
    </div>
    <a href="dashboard.php" class="<?= ($page_title=='Dashboard')?'active':'' ?>">Dashboard</a>
    <a href="add_product.php" class="<?= ($page_title=='Add Product')?'active':'' ?>">Add Product</a>
    <a href="update_product.php" class="<?= ($page_title=='Update Product')?'active':'' ?>">Update Product</a>
    <a href="add_category.php" class="<?= ($page_title=='Add Category')?'active':'' ?>">Add Category</a>
    <a href="profile.php" class="<?= ($page_title=='Profile')?'active':'' ?>">Profile</a>
    <a href="../auth/logout.php">Logout</a>
</div>

<div class="content">