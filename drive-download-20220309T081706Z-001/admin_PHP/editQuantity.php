<?php
if (isset($_POST["index"])) {
    session_start();
    $_SESSION["cart"][(int)$_POST["index"]]["quantity"] = $_POST["quantity"];
    echo $_SESSION["cart"][(int)$_POST["index"]]["quantity"];
}
?>