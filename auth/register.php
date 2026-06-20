<?php
require_once "db.php";

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? "");
    $phone = trim($_POST['phone'] ?? "");
    $password = $_POST['password'] ?? "";
    $confirm = $_POST['confirm_password'] ?? "";

    if (!$email || !$password || !$confirm) {

        $error = "Please fill all fields.";

    } elseif ($password !== $confirm) {

        $error = "Passwords do not match.";

    } else {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $conn->prepare("
                INSERT INTO users (email, phone, password_hash, role)
                VALUES (?,?,?,?)
            ");

            $stmt->execute([
                $email,
                $phone,
                $hash,
                "User"
            ]);

            // ✅ IMPORTANT FIX: redirect to login page
            header("Location: login.php?registered=1");
            exit;

        } catch (PDOException $e) {
            $error = "Email already exists.";
        }
    }
}
?>