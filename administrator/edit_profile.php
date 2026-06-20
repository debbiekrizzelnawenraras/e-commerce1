<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: admin_login.php");
    exit();
}

include '../db.php';
include 'header.php';
include 'sidebar.php';

$error = "";
$success = "";

$id = $_SESSION['admin_id'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['update_profile'])){
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];

    if($password){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET email=?, phone=?, password_hash=? WHERE id=?");
        $stmt->execute([$email,$phone,$hash,$id]);
    } else {
        $stmt = $conn->prepare("UPDATE users SET email=?, phone=? WHERE id=?");
        $stmt->execute([$email,$phone,$id]);
    }
    $success = "Profile updated successfully!";
}
?>

<div class="container mt-5 offset-md-2 col-md-8">
    <h2>Edit Profile</h2>
    <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <?php if($success) echo "<div class='alert alert-success'>$success</div>"; ?>

    <form method="POST">
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?=htmlspecialchars($admin['email'])?>" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?=htmlspecialchars($admin['phone'])?>">
        </div>
        <div class="mb-3">
            <label>New Password (leave blank to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" name="update_profile" class="btn btn-warning w-100">Update Profile</button>
    </form>
</div>

<?php include 'footer.php'; ?>