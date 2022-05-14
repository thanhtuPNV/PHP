<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("./connect.php");
// Hủy giỏ hàng:
if (isset($_GET["idCancel"]))
{
    $idCancel = $_GET["idCancel"];
    if ($idCancel == 0)
    {
        unset($_SESSION["cart"]);
        header("location:home.php");
    }
}
// Hủy item:
$idItem = $_GET["idItem"];
foreach($_SESSION['cart'] as $key => $stored_pro){
    if($idItem == $stored_pro['id']){
        unset($_SESSION["cart"][$key]);
        header("location:cart.php");
    }
}
?>