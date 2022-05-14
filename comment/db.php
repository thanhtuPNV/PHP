<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "like_dislike";
$conn = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conn, 'UTF8');
if(!$conn){
    die("Connection failed: ". mysqli_connect_errno());
}
?>