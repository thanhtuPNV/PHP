<?php
    session_start();
    class order extends Controller{

        public function status($status, $link)
        {
            $ordersModel = $this->model("OrderModel");
            $cartsModel = $this->model("CartModel");
            $usersModel = $this->model("UsersModel");
            $orderModel = $this->model("OrderModel");
            $statusList = $orderModel->countGroupByStatus($_SESSION["userId"]);
            $carts = $cartsModel->getCartListByIdUser($_SESSION["userId"]);
            $order = $ordersModel->getOrderHistoryListByIdUser($_SESSION["userId"], $status);
            return $this->view("layOutChaitan", [
                "page" => "orders",
                "cartList" => $carts,
                "orderList" => $order,
                "account" => $usersModel->getUser($_SESSION["userId"]),
                "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
                "statusList" => $statusList,
                "link" => "$link"
            ]);
        }

        function index()
        {   
            $status = "successful delivery";
            return $this->status($status,"");
        }

        function status1()
        {
            $status = "wait for confirmation";
            return $this->status($status,".");
        }

        function status2()
        {
            $status = "prepare order";
            return $this->status($status,".");
        }

        function status3()
        {
            $status = "delivering";
            return $this->status($status,".");
        }
        
        function buyProduct($cartId){
            $cartsModel = $this->model("CartModel");
            $cart = $cartsModel->getCartById($cartId);
            $cartDetail = $cartsModel->getCartById($cartId);//
            $ordersModel = $this->model("OrderModel");
            $usersModel = $this->model("UsersModel");
            $user = $usersModel->getUser($_SESSION["userId"]);
            if ($cart["userId"] == $_SESSION["userId"]){
                $content = $cartDetail['nameProduct'];
                $ordersModel->addOrder($cart['cartQuantity'], $cart['productId'], $cart["userId"], "wait for confirmation", $user['email'], $user['name'], $content);
                $cartsModel->deleteCart($cartId);
                return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order");
            }
            return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart");
        }

        function updateOrder($idOrder){
            $ordersModel = $this->model("OrderModel");
            $ordersModel->updateOrderById($idOrder, "successful delivery");
            return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order");
        }

        function deleteOrder($id){
            $ordersModel = $this->model("OrderModel");
            $cartsModel = $this->model("CartModel");
            $usersModel = $this->model("UsersModel");
            $carts = $cartsModel->getCartListByIdUser($_SESSION["userId"]);
            $order = $ordersModel->getOrderListByIdUser($_SESSION["userId"]);
            $ordersModel->deleteOrder($id);
            return $this->view("layOutChaitan", [
                "page" => "orders",
                "cartList" => $carts,
                "orderList" => $order,
                "account" => $usersModel->getUser($_SESSION["userId"]),
                "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
                "link" => ""
            ]);
            
        }
    }
?>