<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body{margin: 0;padding: 0;box-sizing: border-box;width: 100%;}
        .container{background-color: #a31e32;width: 100%;height: 100vh;}
        .form{padding-top: 15%;}
        .form-control{transform: translateY(-100%);z-index: 100;width: 100%;display: flex;text-transform: uppercase;justify-content: center;align-items: center;color: white;padding-top: 30px;}
        .form-laber{min-width: 10%;font-size: 20px;}
        .form-input{width: 350px;height: 30px;border-radius: 10px;padding: 5px;font-size: 20px;border: none;}
        .form-control #submitUpdate{width: 560px;height: 40px;border: none;cursor: pointer;}
        ._back-to-home{position:fixed;right: 0;top: 50%;}
        ._back-to-home button{width: 150px;height: 50px;border: none;cursor: pointer;background-color: black;color: white;font-size: 20px;border-radius: 5px;}
        /* transform: translateY(-100%);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
        height: 100vh;
        background-color: #a31e32;
        justify-content: center;
        align-items: center; */
        /*  */
        /* width: 500px;
        display: flex;
        flex-direction: column;
        color: #fff;
        text-transform: uppercase; */
    </style>
</head>
<body>
<?php
error_reporting(0);
include "./connect.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM pro WHERE Id_products  = $id";
$qr = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($qr);

?>

<div class="container">
<form action="" method="POST" class="form">
            <div class="form-control">
                <label class="form-laber" for="">Name</label>
                <input class="form-input" type="text" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">Img</label>
                <input class="form-input" type="text" name="image" value="<?php echo $row['image'];  ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">Price</label>
                <input class="form-input" type="text" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">ID CATEGORY</label>
                <input class="form-input" type="text" name="ID_CATEGORY" value="<?php echo $row['id_category']; ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">percent</label>
                <input class="form-input" type="text" name="percent" value="<?php echo $row['percent']; ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">key_search</label>
                <input class="form-input" type="text" name="key_search" value="<?php echo $row['key_search']; ?>">
            </div>
            <div class="form-control">
                <label class="form-laber" for="">description</label>
                <input class="form-input" type="text" name="description" value="<?php echo $row['description']; ?>">
            </div>
            <div class="form-control">
                <input class="form-input" type="submit" name="submitUpdate" value="Update" id="submitUpdate">
            </div>
        </form>
        <div class="_back-to-home"><a href="product-list.php"><button>Back to home</button></a></div>
</div>

<?php

if (isset($_POST["submitUpdate"])){
    
    $name = $_POST["name"];
    $image = $_POST["image"];
    $price = $_POST["price"];
    $id_category = $_POST["ID_CATEGORY"];
    $percent = $_POST["percent"];
    $key_search = $_POST["key_search"];
    $description = $_POST["description"];

    
    if ($name == ""){ echo "add name";}
    elseif ($image == ""){ echo "add img";}
    elseif ($price == ""){ echo "add price";}
    elseif ($id_category == ""){ echo "add id_category";}
    elseif ($percent == ""){ echo "add percent";}
    elseif ($key_search == ""){ echo "add key_search";}
    elseif ($description == ""){ echo "add description";}
    else{
        $sql = "UPDATE pro set name = '$name', image = '$image', price = $price, id_category = $id_category, percent = $percent, key_search = '$key_search', description = '$description' where Id_products = $id;"; 
        mysqli_query($conn,$sql);
        header("location: product-list.php");
    }
}
 
?>
</body>
</html>