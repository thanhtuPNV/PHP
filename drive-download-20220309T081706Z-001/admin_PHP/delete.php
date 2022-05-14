<?php
include "./connect.php";
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$sql = "DELETE FROM pro where Id_products = $id";
mysqli_query($conn, $sql);
header("location: product-list.php");
?>