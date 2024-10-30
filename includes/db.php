<?php

$host = "localhost"; //127.0.0.1
$user = "root";
$password = "";
$dbname = "task-manager";

$conn = new mysqli($host, $user, $password, $dbname);
if($conn->connect_error){
    die("connection failed : " . $conn->connect_error);
}


?>