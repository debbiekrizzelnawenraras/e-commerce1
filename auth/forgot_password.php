<?php
session_start();
require_once "db.php";
require_once "traccar_sms.php"; // your SMS function

$error = "";

// Format PH number for SMS
function format_phone($phone) {
    $phone = trim($phone);
    if(preg_match('/^09\d{9}$/', $phone)) return "+63".substr($phone, 1);
    if(preg_match('/^\+639\d{9}$/', $phone)) return $phone;
    return false;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $phone = trim($_POST['phone'] ?? '');
    if(!$phone){
        $error = "Please enter your mobile number.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM users WHERE phone=? LIMIT 1");
        $stmt->execute([$phone]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            $error = "Mobile number not found.";
        } else {
            $otp = random_int(100000, 999999);
            $otpHash = password_hash($otp, PASSWORD_DEFAULT);
            $expires = (new DateTime("+5 minutes"))->format("Y-m-d H:i:s");

            $stmt = $conn->prepare("UPDATE users SET reset_otp_hash=?, reset_otp_expires=?, reset_otp_attempts=0 WHERE id=?");
            $stmt->execute([$otpHash, $expires, $user['id']]);

            // send OTP via SMS
            $formatted = format_phone($phone);
            [$ok, $resp] = traccar_send_sms($formatted, "Your OTP: $otp. Expires in 5 minutes.");

            if($ok){
                $_SESSION['pw_reset_user_id'] = $user['id'];
                $_SESSION['pw_reset_phone'] = $phone;
                header("Location: verify_otp.php");
                exit;
            } else {
                $error = "Failed to send OTP: ".$resp;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">
<div class="card p-4" style="width:100%; max-width:400px;">
    <h4 class="mb-3">Forgot Password</h4>
    <?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
        <input class="form-control mb-3" name="phone" placeholder="09xxxxxxxxx" required>
        <button class="btn btn-primary w-100">Send OTP</button>
    </form>
    <p class="mt-3 text-center"><a href="login.php">Back to login</a></p>
</div>
</body>
</html>