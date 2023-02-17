<?php
if (isset($SESSION['localex'])) {
    include('language/' . $_SESSION['localex'] . '.php');
} elseif (isset($_GET['locale'])) {
    $_SESSION['localex'] = $_GET['locale'];
    include('language/' . $_SESSION['localex'] . '.php');
} elseif (!isset($SESSION['localex'])) {
    $_SESSION['localex'] = 'en';
    include('language/' . $_SESSION['localex'] . '.php');
}