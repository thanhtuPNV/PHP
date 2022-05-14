<?php
$host = "localhost";
$user = "root";
$password="";
$database = "testphp";
$conn = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conn, 'UTF8');
if (!$conn){
   die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";
?>