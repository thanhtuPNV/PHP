<?php
session_start();
include("./connect.php");
$idUser = $_SESSION['IDUSER'];
echo $idUser;
if(isset($_POST["button"])){
    if(isset($_POST['name'])){
        $Name = $_POST['name'];
        $_SESSION['name_cus'] = $Name;
    }
    if(isset(($_POST['mail']))){
        $Mail = $_POST['mail'];
        $_SESSION['name_cus'] = $Mail;
    }
    if(isset(($_POST['phonenumber']))){
        $Phonenumber = $_POST['phonenumber'];
        $_SESSION['name_cus'] = $Phonenumber;
    }
    if(isset(($_POST['address']))){
        $Address = $_POST['address'];
        $_SESSION['name_cus'] = $Address;
    }
    if(isset(($_POST['date']))){
        $Date = $_POST['date'];
        $_SESSION['name_cus'] = $Date;
    }
    echo $Name;
    echo "|";
    echo $Mail;
    echo "|";
    echo $Phonenumber;
    echo "|";
    echo $Address;
    echo "|";
    echo $Date;
    echo "|";
}
// order_success
$tongtatca=0;
    foreach($_SESSION["cart"] as $product) {
        $productData = mysqli_query($conn, "select * from pro where Id_products={$product["id"]}")->fetch_assoc();
        $discount = $productData['price'] *0.1*$product["quantity"];
        $tongtientungSP = $productData['price']*$product["quantity"]-$discount;
        $tongtatca+=($productData['price']*$product["quantity"]-$discount);
        $quantity = $product['quantity'];
        $image = $productData['image'];
        $name = $productData['name'];
        $price = $productData['price'];
        echo $product['quantity'];
        echo "|";
        echo $productData['image'];
        echo "|";
        echo $productData['name'];
        echo "|";
        echo $productData['price'];
        echo "|";
        echo $discount;
        echo "|";
        echo $tongtientungSP;
        echo "|";
    }
    echo "|";
    echo $tongtatca;
    echo "|";
    $sql = "INSERT INTO order_success(IdUser,ImagePro,NamePro,PricePro,QuantityPro,DiscountPro,TotalPro)
    VALUES($idUser,'$image','$name',$price,$quantity,$discount,$tongtientungSP)";
    $result = mysqli_query($conn, $sql);
?>