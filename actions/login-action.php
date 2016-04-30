<?php
if (isset($_POST["password"])) {
    $pw = $_POST["password"];
    if (strtolower($pw) == "rosmarin") {
        session_start();
        $_SESSION['auth'] = 1;
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php");
        die();
    }
} else {
    header("Location: ../login.php");
    die();
}