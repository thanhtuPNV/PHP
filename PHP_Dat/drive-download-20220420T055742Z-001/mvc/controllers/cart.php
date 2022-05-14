<?php
    session_start();
    class cart extends Controller{

        function index(){
            $cartsModel = $this->model("CartModel");
            $usersModel = $this->model("UsersModel");
            $orderModel = $this->model("OrderModel");
            $statusList = $orderModel->countGroupByStatus($_SESSION["userId"]);
            $carts = $cartsModel->getCartListByIdUser($_SESSION["userId"]);
            return $this->view("layOutChaitan", [
                "page" => "cart", 
                "cartList" => $carts,
                "account" => $usersModel->getUser($_SESSION["userId"]), 
                "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
                "statusList" => $statusList, 
                "link" => ""]);
        }

        function addProductToCart($idProduct){
            if($_SESSION != null){
                if(isset($_POST["add-to-cart"])){
                    $quantity = $_POST['quantity'];
                    $cartsModel = $this->model("CartModel");
                    if($cartsModel->checkProduct($_SESSION["userId"], $idProduct)){
                        $quantityUpdate = $quantity +  $cartsModel->getCartListByIdUserAndIdProduct($_SESSION["userId"], $idProduct)["cartQuantity"];
                        $cartsModel->updateCart($idProduct, $_SESSION["userId"], $quantityUpdate);
                    }else{
                        // $quantityUpdate = $quantity + $cartsModel->getCartListByIdUser($_SESSION["userId"])
                        $cartsModel->addCart($quantity, $idProduct, $_SESSION["userId"]);
                    }
                    // $cartsModel->addCart($quantity, $idProduct, $_SESSION["userId"]);
                    return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart");
                }else{
                    return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn//home/detailProduct/$idProduct");
                }
            }
        }

        function deleteCart($id){
            $cartsModel = $this->model("CartModel");
            $cartsModel->deleteCart($id);
            return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart");
        }
    }
?>