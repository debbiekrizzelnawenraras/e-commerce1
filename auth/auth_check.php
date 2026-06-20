<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../auth/login.php");
    exit;
}

if(strtolower($_SESSION['role']) !== "admin"){
    header("Location: ../auth/login.php");
    exit;
}
?>