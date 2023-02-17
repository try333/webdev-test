<?php
require_once("../database/db.php");
session_destroy();
echo "<script> alert('You are Logged Out.');
window.location.href='http://" . $_SESSION['username'] . "." . $link2 . "/login.php';
            </script>";