<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    die();
} else {
    if (!$_SESSION['auth'] == 1) {
        header("Location: login.php");
        die();
    }
}