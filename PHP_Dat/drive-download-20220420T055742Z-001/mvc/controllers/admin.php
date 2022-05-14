<?php
    class Admin extends Controller{
        function index(){
            $productList = $this -> model("ProductsModel");
            $this -> view("layoutAdmin",[
                "productList"=> $productList->getProductList(),
                "logo" => "public/Img/LOGO SHOP.PNG",
                "page"=>"products",
                "link" => ""
            ]);
        }

        function addProduct(){
            $productModel = $this->model("ProductsModel");
        // "productList" => $productList->getProductList(),
            if (isset($_POST["cancalAddProduct"])) {
                header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin");
            }else{
                if (isset($_POST["add-product"])) {
                    $name = $_POST["name-product"];
                    $img = $_POST["img"];
                    $price = $_POST["price"];
                    $amount = $_POST["amount"];
                    $description = $_POST["description"];
                    if ($productModel->addProduct($name, $img, $price, $amount, $description)) {
                        header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin");
                    } else {
                        echo "Lỗi";
                    }
                } else {
                    $this->view("layoutAdmin",[
                        "logo" => "../public/Img/LOGO SHOP.PNG",
                        "page" => "addproduct",
                        "link" => "."
                    ]);
                }
            }

        }

        function updateProduct($id){
            $productModel = $this->model("ProductsModel");
            $product = $productModel->getProduct($id);
            if (isset($_POST["cancalUpdateProduct"])) {
                header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin");
            }else if (isset($_POST["update-product"])) {
                if(empty($_POST["update-img"])){
                    $img = $_POST["img-old"];
                }
                else{
                    $img = $_POST["update-img"];
                }
                $name = $_POST["update-name-product"];
                $price = $_POST["update-price"];
                $amount = $_POST["update-amount"];
                $description = $_POST["update-description"];
                if ($productModel->updateProduct($id, $name, $img, $price, $amount, $description)) {
                    header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin");
                } else {
                    echo "Lỗi";
                }
            }else {
                $this->view("layoutAdmin", [
                    "detailProduct" => $product,
                    "logo" => "../../public/Img/LOGO SHOP.PNG",
                    "page" => "updateProduct",
                    "link" => "../."
                ]);
            }
            
        }

        function detailProduct($id){
            $productModel = $this->model("ProductsModel");
            $product = $productModel->getProduct($id);
            $this->view("layoutAdmin", [
                "detailProduct" => $product,
                "logo" => "../../public/Img/LOGO SHOP.PNG",
                "page" => "detailProduct",
                "link" => "../."
            ]);

        }

        function deleteProduct($id){
            $productModel = $this->model("ProductsModel");
            $productModel->deleteProduct($id);
        }

        function userList(){
            $UsersModel = $this->model("UsersModel");
            $this->view("layoutAdmin", [
                "userList" => $UsersModel->getUserList(),
                "logo" => "../public/Img/LOGO SHOP.PNG",
                "page" => "user",
                "link" => "."
            ]);
        }

        function showOrders(){
            $ordersModel = $this->model("OrderModel");
            $orderList = $ordersModel->getOrderList();
            $this->view("layoutAdmin", [
                "orderList" => $orderList,
                "page" => "orderAdmin",
                "link" => "."
            ]);
        }

        function updateStatus($idOrder, $status){
            $ordersModel = $this->model("OrderModel");
            $ordersModel->updateOrderById($idOrder, $status);
            return header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/showOrders");
        }

        function status1($idOrder){
            $this->updateStatus($idOrder, "prepare order");
        }

        function status2($idOrder)
        {
            $this->updateStatus($idOrder, "delivering");
        }

        function showOrdersNeW()
        {
            $ordersModel = $this->model("OrderModel");
            $orderList = $ordersModel->getOrderTop3();
            $this->view("layoutAdmin", [
                "orderList" => $orderList,
                "page" => "orderAdmin",
                "link" => "."
            ]);
        }

        function showOrderDetail($id){
            $ordersModel = $this->model("OrderModel");
            $order = $ordersModel->getOrderById($id);
            $this->view("layoutAdmin", [
                "page" => "orderDetail",
                "orderDetail" => $order,
                "link" => "../."
            ]);
        }

        function updatestatu($id){
            $ordersModel = $this->model("OrdersModel");
            if (isset($_POST["status"])){
                $status = $_POST["status"];
                $ordersModel->updateOrderById($id, $status);
            }
        }

        
    }
?>