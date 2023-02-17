<?php

require_once("../database/db.php");
//echo preg_match('/^[\w]+$/', "xf04929304");
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    $hashed_password = mysqli_real_escape_string($con, $hashed_password);
    $create_datetime = date("Y-m-d H:i:s");
    if (isset($_SESSION["profile_image"])) {
        $image = $_SESSION["profile_image"];
    } else {
        $image = "";
    }
    $query    = "SELECT * FROM `users` WHERE email='$email' OR username='$username' ";
    $result = mysqli_query($con, $query);
    $row_number = mysqli_num_rows($result);
    if ($row_number == 1) {
        echo
        "<script>
  alert('duplicate data found.');
  document.location.href = '../index.php';
  </script>
  ";
    } else {
        $query    = "INSERT into `users` (username, password, email, image, create_datetime)
        VALUES ('$username', '$hashed_password', '$email', '$image', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<script> alert('You are registered successfully.');
            window.location.href='http://" . $username . "." . $link2 . "/login.php';
            </script>";
        } else {
            echo "<div class='form'>
     <h3>Required fields are missing.</h3><br/>
     <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
     </div>";
        }
    }
}