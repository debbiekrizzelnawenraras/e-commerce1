<?php
require_once __DIR__ . '/../auth/auth_check.php';
require_once __DIR__ . '/../auth/db.php';

/* GET USER */
$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

/* UPDATE PROFILE */
if(isset($_POST['update'])){

    $email = $_POST['email'];
    $imageName = $user['profile_image'];

    /* UPLOAD IMAGE */
    if(!empty($_FILES['image']['name'])){

        $uploadDir = __DIR__ . "/../uploads/";

        if(!is_dir($uploadDir)){
            mkdir($uploadDir, 0777, true);
        }

        $imageName = time() . "_" . basename($_FILES['image']['name']);

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $uploadDir . $imageName
        );
    }

    /* UPDATE DB */
    $stmt = $conn->prepare("
        UPDATE users
        SET email=?, profile_image=?
        WHERE id=?
    ");

    $stmt->execute([
        $email,
        $imageName,
        $_SESSION['user_id']
    ]);

    header("Location: profile.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background:#f4f6f9; }

        .sidebar {
            height:100vh;
            width:240px;
            position:fixed;
            background:#111827;
            color:white;
            padding-top:20px;
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
            border-radius:12px;
        }

        .avatar {
            width:100px;
            height:100px;
            border-radius:50%;
            object-fit:cover;
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

<!-- MAIN -->
<div class="main">

    <h2>Admin Profile</h2>

    <div class="card-box">

        <!-- IMAGE -->
        <?php if(!empty($user['profile_image'])): ?>
            <img src="../uploads/<?= $user['profile_image'] ?>" class="avatar mb-3">
        <?php else: ?>
            <p>No profile image</p>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       value="<?= $user['email'] ?>"
                       required>
            </div>

            <div class="mb-3">
                <label>Profile Image</label>
                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            <button class="btn btn-primary" name="update">
                Update Profile
            </button>

        </form>

    </div>

</div>

</body>
</html>