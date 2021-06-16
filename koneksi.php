<?php 
$host = "localhost";
$user = "root";
$pass = "root";
$db = "sinau";

$mysqli = new mysqli($host,$user,$pass,$db);

if ($mysqli -> connect_errno) {
    echo "failed to connect to mysql" . $mysqli -> connect_error;
    exit();
}
?>