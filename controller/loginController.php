<?php
require_once("../database/db.php");
$username = strtok($_SERVER['HTTP_HOST'], '.');
$email = $_POST['email'];
$userpass = $_POST['password'];

$sql = mysqli_query($con, "SELECT username, email, password FROM users WHERE email = '$email'");

list($username, $email, $password) = mysqli_fetch_array($sql);

$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    if (password_verify($userpass, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: ../view/dashboard.php");
    } else {
        header("location: ../login.php");
    }
} else {
    header("location:../index.php");
}
