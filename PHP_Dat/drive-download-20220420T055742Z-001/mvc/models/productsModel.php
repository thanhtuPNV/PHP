<?php
    class ProductsModel extends Data{

        public function getProductList(){
            $results = mysqli_query($this->con, "SELECT * FROM products");
            $productList = [];
            while ($row = $results->fetch_assoc()) {
                array_push($productList, $row);
            }
            return $productList;
        }

        public function getProduct($id)
        {
            $result = mysqli_query($this->con, "SELECT * FROM products WHERE id={$id}");
            return $result->fetch_assoc();
        }

        public function addProduct($name, $img, $price, $amount, $description)
        {
            $sql = "INSERT INTO products(nameProduct,img,price,amount,description) 
            VALUES('$name','$img','$price','$amount','$description')";
            $result = mysqli_query($this->con, $sql);
            return $result;
        }

        function updateProduct($id, $nameProduct, $img, $price, $amount, $description)
        {
            $sql = "UPDATE products SET nameProduct ='$nameProduct', img = '$img', price ='$price', amount ='$amount', description ='$description' WHERE id ={$id}";
            return $this->con->query($sql);
        }

        function deleteProduct($id)
        {
            $sql = "DELETE FROM products WHERE id ={$id}";
            header("Location:http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin");
            return $this->con->query($sql);
        }

    }
?>
