<?php
if (isset($SESSION['localex'])) {
    include('language/' . $_SESSION['localex'] . '.php');
} elseif (isset($_GET['locale'])) {
    $_SESSION['localex'] = $_GET['locale'];
    include('language/' . $_SESSION['localex'] . '.php');
} elseif (!isset($SESSION['localex'])) {
    include('language/' . $_SESSION['localex'] . '.php');
}


echo $_SESSION['localex'];