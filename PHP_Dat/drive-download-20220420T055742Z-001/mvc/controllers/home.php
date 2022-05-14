<?php
session_start();
class home extends Controller
{
    // function test() {
    //     $statusListOrigin = $this->model("OrderModel")->countGroupByStatus($_SESSION["userId"]);
    //     $this->view("emptyLayout", [
    //         "page" => "test",
    //         "list" => $statusListOrigin
    //     ]);
    // }
    function index()
    {
        if ($_SESSION != null) {
            $usersModel = $this->model("UsersModel");
            $productModel = $this->model("ProductsModel");
            $cartsModel = $this->model("CartModel");
            $orderModel = $this->model("OrderModel");
            $statusList = $orderModel->countGroupByStatus($_SESSION["userId"]);
            return $this->view("layOutChaitan", [
                "productList" => $productModel->getProductList(),
                "account" => $usersModel->getUser($_SESSION["userId"]),
                "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
                "statusList" => $statusList,
                "page" => "index",
                "link" => ""
            ]);
        }
        $this->view("layOutChaitan", [
            "page" => "index",
            "link" => ""
        ]);
    }

    function logout()
    {
        session_destroy();
        header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/");
    }

    function updateUser()
    {

        if (!isset($_POST["update-user"])) {
            return $this->view("layOutChaitan", ["page" => "index"]);
        }
        $usersModel = $this->model("UsersModel");
        $name = $_POST["name-update"];
        $phoneNumber = $_POST["phonenumber-update"];
        $address = $_POST["address-update"];
        $password = $_POST["password-update"];
        if ($usersModel->updateUser($_SESSION["userId"], $name, $phoneNumber, $address, $password)) {
            return header("Location: http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/");
        } else {
            echo "Lỗi";
        }
    }

    function productList()
    {
        $orderModel = $this->model("OrderModel");
        $statusList = $orderModel->countGroupByStatus($_SESSION["userId"]);
        $productModel = $this->model("ProductsModel");
        $usersModel = $this->model("UsersModel");
        $cartsModel = $this->model("CartModel");
        return $this->view("layOutChaitan", [
            "productList" => $productModel->getProductList(),
            "account" => $usersModel->getUser($_SESSION["userId"]),
            "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
            "statusList" => $statusList,
            "page" => "productList",
            "link" => "."
        ]);
    }

    function detailProduct($id)
    {
        $orderModel = $this->model("OrderModel");
        $statusList = $orderModel->countGroupByStatus($_SESSION["userId"]);
        $productModel = $this->model("ProductsModel");
        $product = $productModel->getProduct($id);
        $usersModel = $this->model("UsersModel");
        $cartsModel = $this->model("CartModel");
        $this->view("layoutChaitan", [
            "detailProduct" => $product,
            "account" => $usersModel->getUser($_SESSION["userId"]),
            "countCarts" => $cartsModel->coutCartsByIdUser($_SESSION["userId"]),
            "page" => "productDetail",
            "statusList" => $statusList,
            "link" => "../."
        ]);
    }

}
