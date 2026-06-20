<?php
include "auth.php";
include "db.php";

$user_id = $_SESSION['user_id'];

if(isset($_FILES['profile_image'])){

    $image = time() . $_FILES['profile_image']['name'];

    move_uploaded_file(
        $_FILES['profile_image']['tmp_name'],
        "uploads/" . $image
    );

    $stmt = $conn->prepare("
        UPDATE users
        SET profile_image = ?
        WHERE id = ?
    ");

    $stmt->execute([$image,$user_id]);

    $_SESSION['profile_image'] = $image;

    header("Location: profile.php");
}