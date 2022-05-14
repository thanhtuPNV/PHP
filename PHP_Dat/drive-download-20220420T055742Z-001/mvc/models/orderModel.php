<?php
    class OrderModel extends Data{
        function getOrderList(){
            $results = mysqli_query($this->con, "SELECT orders.id as idOrder, products.nameProduct as nameProduct, orders.amount as orderAmout, products.price as productsPrice, users.id, users.name as usersName, phoneNumber, address, status
            FROM orders
            LEFT JOIN products
            ON orders.idProduct = products.id
            LEFT JOIN users
            ON orders.idUser = users.id
            ");
            $orderList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($orderList, $row);
            }
            return $orderList;
        }

        function getOrderHistoryListByIdUser($idUser, $status)
        {
            $results = mysqli_query($this->con, "SELECT orders.id as idOrder, orders.status as status, products.nameProduct as nameProduct, orders.amount as orderAmount, products.price as price, users.id as idUser, users.name as userName, phoneNumber, address, img
                    FROM orders
                    LEFT JOIN products
                    ON orders.idProduct = products.id
                    LEFT JOIN users
                    ON orders.idUser = users.id
                    WHERE users.id = {$idUser} AND orders.status = '{$status}'
                    ");
            $orderList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($orderList, $row);
            }
            return $orderList;
        }

        function getOrderListByIdUser($idUser)
        {
            $results = mysqli_query($this->con, "SELECT orders.id as idOrder, orders.status as status, products.nameProduct as nameProduct, orders.amount as orderAmount, products.price as price, users.id as idUser, users.name as userName, phoneNumber, address, img
                FROM orders
                LEFT JOIN products
                ON orders.idProduct = products.id
                LEFT JOIN users
                ON orders.idUser = users.id
                WHERE users.id = {$idUser}
                ");
            $orderList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($orderList, $row);
            }
            return $orderList;
        }

        function getOrderById($id){
            $result = mysqli_query($this->con, "SELECT orders.id, products.nameProduct, orders.amount as amount, products.price as price, users.id, users.name as userName, phoneNumber, address, (orders.amount * products.price) as total, img, phoneNumber
            FROM orders
            LEFT JOIN products
            ON orders.idProduct = products.id
            LEFT JOIN users
            ON orders.idUser = users.id
            WHERE orders.id = {$id}
            ");
            return $result->fetch_assoc();
        }

        function getOrderTop3(){
            $results = mysqli_query($this->con, "SELECT orders.id as idOrder, products.nameProduct as nameProduct, orders.amount as orderAmout, products.price as productsPrice, users.id, users.name as usersName, phoneNumber, address, status
            FROM orders
            LEFT JOIN products
            ON orders.idProduct = products.id
            LEFT JOIN users
            ON orders.idUser = users.id
            ORDER BY orders.id DESC LIMIT 3
            ");
            $orderList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($orderList, $row);
            }
            return $orderList;
        }

        public function addOrder($amount, $idProduct, $idUser, $status, $email, $name, $content)
        {   
            $subject = "[Chaitan] Notification";
            sendEmail($email, $name, $subject, $content);
            $sql = "INSERT INTO orders(amount, idProduct, idUser, status) 
                VALUES('$amount','$idProduct','$idUser', '$status')";
            $result = mysqli_query($this->con, $sql);
            return $result;
        }

        function updateOrder($id, $amount, $idProduct, $idUser)
        {
            $sql = "UPDATE orders SET amount ='$amount', idProduct = '$idProduct', idUser ='$idUser' WHERE id ={$id}";
            return $this->con->query($sql);
        }

        function updateOrderById($id, $statu)
        {
            $sql = "UPDATE orders SET status = '$statu' WHERE id ={$id}";
            return $this->con->query($sql);
        }

        function deleteOrder($id)
        {
            $sql = "DELETE FROM orders WHERE id ={$id}";
            header("Location:http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order");
            return $this->con->query($sql);
        }

        function countGroupByStatus($userId){
            $results = $this->con->query("SELECT status, COUNT(id) as 'count' 
            FROM orders
            WHERE idUser = {$userId}
            GROUP BY status
            ");
            $statusList = [];
            while ($row = $results->fetch_assoc()) {
                $statusList+= [$row["status"] => $row["count"]];
            }
            return $statusList;
        }

    }
?>