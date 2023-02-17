<?php
require("database/db.php");
$subdomain = strtok($_SERVER['HTTP_HOST'], '.');
//echo $subdomain;

$hostdomain = $_SERVER['SERVER_NAME'];
//echo $hostdomain;

//verified subdomain

$parse = parse_url($link);
$domain_link = preg_replace("/^([a-zA-Z0-9].*\.)?([a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9]\.[a-zA-Z.]{1,})$/", '$2', $parse['host']);

if ($subdomain != $domain_link) {
    $query    = "SELECT * FROM `users` WHERE username='$subdomain'";
    $result = mysqli_query($con, $query);
    $row_number = mysqli_num_rows($result);
    if ($row_number == 1) {
    } else {

        echo "<script> alert('Subdomain not found.');
            window.location.href='" . $link . "';
            </script>";
    }
}