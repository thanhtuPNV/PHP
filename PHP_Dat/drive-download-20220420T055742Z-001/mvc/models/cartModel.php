<?php
    class CartModel extends Data{

        function getCartListByIdUser($id){
            $results = mysqli_query($this->con, "SELECT carts.id as idCart, products.id as productId, products.nameProduct as nameProduct, carts.quantity as cartQuantity, products.price as productsPrice, img, description
            FROM carts
            LEFT JOIN products
            ON carts.idUser = products.id
            WHERE carts.idUser = {$id}
            ");
            $cartList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($cartList, $row);
            }
            return $cartList;
        }

        function getCartById($id){
            $result = mysqli_query($this->con, "SELECT carts.id as idCart, carts.idUser as userId, products.id as productId, products.nameProduct as nameProduct, carts.quantity as cartQuantity, products.price as productsPrice, img, description
            FROM carts
            LEFT JOIN products
            ON carts.idUser = products.id
            WHERE carts.id = {$id}
            ");
            return $result->fetch_assoc();
        }

        function getCartListByIdUserAndIdProduct($id, $idProduct)
        {
            $result = mysqli_query($this->con, "SELECT carts.id as idCart, products.id as productId, products.nameProduct as nameProduct, carts.quantity as cartQuantity, products.price as productsPrice, img, description
                FROM carts
                LEFT JOIN products
                ON carts.idUser = products.id
                WHERE carts.idUser = {$id} AND products.id = {$idProduct}
                ");
            return $result->fetch_assoc();
        }

        function coutCartsByIdUser($id){
            $result = $this->con->query("SELECT COUNT(carts.id) as 'count' 
            FROM carts 
            LEFT JOIN users
            ON carts.idUser = users.id
            WHERE users.id = {$id}
            ");
            return $result->fetch_assoc()["count"];
        }

        public function checkProduct($idUser, $idProduct){
            $productList = $this->getCartListByIdUser($idUser);
            foreach ($productList as $product) {
                if ($idProduct == $product["productId"]) {
                    return true;
                }
            }
            return false;
            

        }

        public function addCart($quantity, $idProduct, $idUser)
        {   
            $sql = "INSERT INTO carts(quantity, idProduct, idUser) 
                VALUES('$quantity','$idProduct','$idUser')";
            $result = mysqli_query($this->con, $sql);
            return $result;
        }

        function updateCart($id, $idUser, $quantity)
        {
            $sql = "UPDATE carts SET quantity ='$quantity'
            WHERE idProduct ={$id} AND idUser = {$idUser}";
            return $this->con->query($sql);
        }

        function deleteCart($id)
        {
            $sql = "DELETE FROM carts WHERE id ={$id}";
            return $this->con->query($sql);
        }

    }
?>