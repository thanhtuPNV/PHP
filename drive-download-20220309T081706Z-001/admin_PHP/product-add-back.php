<?php
include "./connect.php";
error_reporting(2);
$target_file = "../" . basename($_FILES["img"]["name"]);
$uploadOK = 1;
if (isset($_POST["button"])) {
    $key = "";
    $des = "";
    $status = 0;
    $image = basename($_FILES["img"]["name"]);
    if ($image == null || $image == "") {
        $image = $_POST["img"];
        $uploadOK = 0;
    } else {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if ($check !== false) {
            $image = basename($_FILES["img"]["name"]);
            $uploadOK = 1;
        } else {
            $image = "";
?>
<script type="text/javascript">
window.location = "product-add.php?notimage=notimage"
</script>
<?php
            $uploadOK = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Tên file đã tồn tại trên server, không được ghi đè";
        $allowUpload = false;
    }
    if (isset($_POST['txtName'])) {
        $namePr = $_POST['txtName'];
    }

    if (isset($_POST['category'])) {
        $categoryPr = $_POST['category'];
    }

    if (isset($_POST['txtPrice'])) {
        $pricePr = $_POST['txtPrice'];
    }
    if (isset($_POST['txtSalePrice'])) {
        $salePricePr = $_POST['txtSalePrice'];
    }
    if (isset($_POST['txtNumber'])) {
        $quantityPr = $_POST['txtNumber'];
    }
    if (isset($_POST['txtKeyword'])) {
        $keywordPr = $_POST['txtKeyword'];
    }
    if (isset($_POST['txtDescript'])) {
        $descriptPr = $_POST['txtDescript'];
    }
    $sql = "INSERT INTO pro(name,image,description,id_category,price,percent,key_search) 
    VALUES('$namePr','$image','$descriptPr','$categoryPr','$pricePr','$salePricePr','$keywordPr')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:product-list.php?addps-success");
        exit();
    } else {
        header("location:product-list.php?addpf=fail");
        exit();
    }
}
?>