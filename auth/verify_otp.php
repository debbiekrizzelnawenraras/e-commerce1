<?php
session_start();
require_once "db.php";

$error = "";

if(!isset($_SESSION['pw_reset_user_id'])){
    header("Location: forgot_password.php");
    exit;
}

$user_id = $_SESSION['pw_reset_user_id'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $otp_input = trim($_POST['otp'] ?? '');
    if(!$otp_input){
        $error = "Please enter the OTP.";
    } else {
        $stmt = $conn->prepare("SELECT reset_otp_hash, reset_otp_expires, reset_otp_attempts FROM users WHERE id=? LIMIT 1");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $now = new DateTime();
            $exp = new DateTime($user['reset_otp_expires']);

            if($user['reset_otp_attempts'] >= 5){
                $error = "Maximum OTP attempts exceeded.";
            } elseif($exp < $now){
                $error = "OTP has expired.";
            } elseif(password_verify($otp_input, $user['reset_otp_hash'])){
                // OTP correct, go to reset password
                $_SESSION['otp_verified'] = true;
                header("Location: reset_password.php");
                exit;
            } else {
                $error = "Invalid OTP.";
                $stmt = $conn->prepare("UPDATE users SET reset_otp_attempts = reset_otp_attempts + 1 WHERE id=?");
                $stmt->execute([$user_id]);
            }
        } else {
            $error = "User not found.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">
<div class="card p-4" style="width:100%; max-width:400px;">
    <h4 class="mb-3">Verify OTP</h4>
    <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
        <input type="text" name="otp" class="form-control mb-3" placeholder="Enter OTP" required>
        <button class="btn btn-primary w-100">Verify OTP</button>
    </form>
</div>
</body>
</html>