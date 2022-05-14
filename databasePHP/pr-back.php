<meta charset="utf-8">
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('./Connect.php');
error_reporting(2);

$target_file = "../" .basename($_FILES["FileImage"]["name"]);
$uploadOK = 1;

if (isset($_POST['addProduct']))
{
    $keywordPr ='';
    $descriptPr = '';
    $status=0;

    $image= basename($_FILES["FileImage"]["name"]);
    if ($image == null || $image='')
    {
        $image = $_POST['imgae'];
        $uploadOK = 0;
    }else{
        $check = getimagesize($_FILES["FileImage"]["tmp_name"]);
        if ($check !== false)
        {
            $image = basename($_FILES["FileImage"]["name"]);
            $uploadOK = 1;
        }else{
            $image = '';
            ?>

            <script type="text/javascript">
                window.location = 'pr_add.php?notimage=notimage';
            </script>
            <?php
            $uploadOK = 0;
        }
    }
    if (file_exists($target_file)){

    }
    if ($uploadOK ==0)
    {   
    }else{

    }
    if(isset($_POST['txtName'])){
        $namePr = $_POST['tstName'];
    }
    if(isset($_POST['category'])){
        $categoryPr = $_POST['category'];
    }
    if(isset($_POST['txtPrice'])){
        $pricePr = $_POST['txtPrice'];
    }
    if(isset($_POST['txtSalePrice'])){
        $salePricePr = $_POST['txtSalePrice'];
    }
    if(isset($_POST['txtNumber'])){
        $quantityPr = $_POST['txtNumber'];
    }
    if(isset($_POST['txtKeyword'])){
        $keywordPr = $_POST['txtKeyword'];
    }
    if(isset($_POST['txtDescropt'])){
        $descriptPr = $_POST['txtDescript'];
    }
    if(isset($_POST['status'])){
        $status = $POST['status'];
    }
    //truy vấn
    $sql = "INSERT INTO products(name,category_id,image,description,price,saleorice,created,quantity,keyword,status
    VALUES('$namePr','$categoryPr','$image','$descriptPr','$pricePr','$salePricePr',now(),'$quantityPr','$keywordPr','$status');";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location:pr_list.php?addps=success");
        exit();
    }
    else{
        header("location:pr_list.php?addps=fail");
        exit();
    }
}
?>