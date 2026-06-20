<?php
require_once __DIR__ . "/../auth/auth_check.php";
require_role('admin');
require_once __DIR__ . "/../auth/db.php";

$uid = $_SESSION['user_id'];

$email = $_POST['email'];
$phone = $_POST['phone'];

$imageName = null;

if(!empty($_FILES['profile_image']['name'])){

    $imageName = time()."_".$_FILES['profile_image']['name'];

    move_uploaded_file(
        $_FILES['profile_image']['tmp_name'],
        "../uploads/".$imageName
    );

    $stmt = $conn->prepare("
        UPDATE users 
        SET email=?, phone=?, profile_image=? 
        WHERE id=?
    ");

    $stmt->execute([$email,$phone,$imageName,$uid]);

}else{

    $stmt = $conn->prepare("
        UPDATE users 
        SET email=?, phone=? 
        WHERE id=?
    ");

    $stmt->execute([$email,$phone,$uid]);
}

header("Location: profile.php");
exit;