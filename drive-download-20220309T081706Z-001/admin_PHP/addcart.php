<?php
session_start();
require_once("./connect.php");
$id = $_GET['id'];
if(is_null($_SESSION['cart']))
{
    array_push($_SESSION['cart'],[['id'=>$id, 'quantity'=> 1]]);
}else{
    array_push($_SESSION['cart'], ['id'=>$id, 'quantity'=> 1]);
}
// 
if(isset($_SESSION['cart']))
header("Location: cart.php");
?>