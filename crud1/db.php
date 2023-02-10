<?php

$servername = "db";
$username = "app2";
$password = "password";
$dbname = "app2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}

?>

