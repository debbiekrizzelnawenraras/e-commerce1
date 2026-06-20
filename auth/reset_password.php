<?php
session_start();
require_once "db.php";

$error = "";
$success = "";

if(!isset($_SESSION['pw_reset_user_id'], $_SESSION['otp_verified'])){
    header("Location: forgot_password.php");
    exit;
}

$user_id = $_SESSION['pw_reset_user_id'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $password = trim($_POST['password'] ?? '');
    $confirm  = trim($_POST['confirm'] ?? '');

    if(!$password || !$confirm){
        $error = "Please fill in all fields.";
    } elseif($password !== $confirm){
        $error = "Passwords do not match.";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password_hash=?, reset_otp_hash=NULL, reset_otp_expires=NULL, reset_otp_attempts=0 WHERE id=?");
        $stmt->execute([$hash, $user_id]);

        // clear sessions
        unset($_SESSION['pw_reset_user_id'], $_SESSION['pw_reset_phone'], $_SESSION['otp_verified']);
        header("Location: login.php?reset=success");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">
<div class="card p-4" style="width:100%; max-width:400px;">
    <h4 class="mb-3">Reset Password</h4>
    <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
        <input type="password" name="password" class="form-control mb-3" placeholder="New Password" required>
        <input type="password" name="confirm" class="form-control mb-3" placeholder="Confirm Password" required>
        <button class="btn btn-primary w-100">Update Password</button>
    </form>
</div>
</body>
</html>