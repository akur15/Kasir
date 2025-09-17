<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin123") {
    header("Location: dashboard_admin.php");
    exit;
} else if ($username == "kasir" && $password == "kasir123") {
    header("Location: dashboard_kasir.php");
    exit;
} else {
    echo "Login gagal!";
}
?>
