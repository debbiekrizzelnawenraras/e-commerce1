<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once __DIR__ . "/db.php";

$error = "";

/* Redirect if already logged in */
if (isset($_SESSION['role'])) {

    if ($_SESSION['role'] === 'admin') {
        header("Location: ../administrator/dashboard.php");
    } else {
        header("Location: ../index.php");
    }

    exit;
}

/* Process Login */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if (!$email || !$password) {

        $error = "Please fill in all fields.";

    } else {

        $stmt = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {

            /* Create session */
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            /* Remember Me */
            if ($remember) {

                $token = bin2hex(random_bytes(32));
                $tokenHash = hash('sha256', $token);
                $expires = date('Y-m-d H:i:s', time() + 30 * 24 * 60 * 60);

                $stmt = $conn->prepare("
                    UPDATE users 
                    SET remember_token_hash=?, remember_token_expires=? 
                    WHERE id=?
                ");

                $stmt->execute([$tokenHash, $expires, $user['id']]);

                setcookie(
                    "remember_user",
                    $user['id'] . ":" . $token,
                    time() + 30 * 24 * 60 * 60,
                    "/"
                );
            }

            /* Redirect based on role */
            if ($user['role'] === 'admin') {

                header("Location: ../administrator/dashboard.php");

            } else {

                header("Location: ../index.php");

            }

            exit;

        } else {

            $error = "Invalid email or password.";

        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <div class="col-md-4">

        <div class="card shadow p-4">

            <h4 class="text-center mb-3">Login</h4>

            <?php if ($error) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>

            <form method="POST">

                <input
                    type="email"
                    name="email"
                    class="form-control mb-3"
                    placeholder="Email"
                    required
                >

                <input
                    type="password"
                    name="password"
                    class="form-control mb-3"
                    placeholder="Password"
                    required
                >

                <div class="form-check mb-3">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember"
                    >

                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>

                </div>

                <button class="btn btn-primary w-100" type="submit">
                    Login
                </button>

                <p class="text-center mt-3 small">

                    <a href="forgot_password.php">Forgot Password?</a>
                    |
                    <a href="register.php">Register</a>

                </p>

            </form>

        </div>

    </div>

</div>

</body>
</html>