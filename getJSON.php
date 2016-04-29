<?php
require_once "require/mysql.php";

$sql = "SELECT * FROM fotos";
$result = $mysqli->query($sql);
$json = array();

$result = $mysqli->query($sql) or die($mysqli->error);
$json = $result->fetch_all( MYSQLI_ASSOC );
echo json_encode($json);
