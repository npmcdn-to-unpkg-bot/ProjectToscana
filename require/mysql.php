<?php

$mysqli = new mysqli("host", "user", "password", "database");
if ($mysqli->connect_errno) {
    die("MySQL-Error: " . $mysqli->connect_error);
}