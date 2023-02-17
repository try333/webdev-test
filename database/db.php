<?php
session_start();
$link = "http://localhost/webdev-test";
$link2 = "localhost/webdev-test";
// Enter your host name, database username, password, and database name.
// If you have not set database password on localhost then set empty.
$con = mysqli_connect("localhost", "root", "", "webdev-test");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
