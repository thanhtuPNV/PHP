<?php
include "dbConnect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "DELETE FROM products WHERE id = $id";
mysqli_query($conn, $sql);
header("location: admin.php");