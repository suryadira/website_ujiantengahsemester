<?php 
include 'connection.php';

session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 
if ($username == $username && $password == $password) {
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../miracle_hotel/admin-miracle/admin.php");
} 
else {
    echo '<script>alert("Login Gagal");history.go(-1);</script>';
    // header("location: page-login.php");
}
?>