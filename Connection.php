<?php
$host = "localhost";
$username = "root";
$password = "";
$miniproject037 = "miniproject037";

$conn = new mysqli($host, $username, $password,$miniproject037);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>