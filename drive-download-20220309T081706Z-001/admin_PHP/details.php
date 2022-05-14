<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>Details</title>
    <style>
        *{margin: 0;padding: 13px;box-sizing:border-box;}
        .container{display: flex;}
        .pr-left{width: 50%;}
        .pr-right{width: 50%;}
        h1,h3{border-bottom: 1px solid black;width: 500px;min-height: 60px;}
        h1{font-size: 50px;}
        h3{font-size: 30px;}
        button{margin-top: 10px;width: 150px;outline: none;}
        ._back-to-home{position:fixed;right: 0;top: 50%;}
        ._back-to-home button{width: 150px;height: 50px;border: none;cursor: pointer;background-color: black;color: white;font-size: 20px;border-radius: 5px;}
    </style>
</head>
<body>
    <?php
    require_once("./connect.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];}
    $sql = 'SELECT * FROM pro WHERE Id_products = ' .$id;
    $result = mysqli_query($conn, $sql);
    if ($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {?>
            <div class="container">
                <div class="pr-left">
                    <img style="width:900px;height:auto;" src="./img/<?php echo $row['image'] ?>">
                </div>
                <div class="pr-right">
                    <h1><?php echo $row['name'] ?></h1>
                    <h3>Price: <?php echo $row['price'] ?> VND</h3>
                    <a href="addcart.php?id=<?=$row['Id_products']?>"><button><b>Mua hàng</b></button></a>
                    <p><i class="fa-solid fa-check"></i> GIAO HÀNG TOÀN QUỐC <br> <i class="fa-solid fa-check"></i> THANH TOÁN KHI NHẬN HÀNG <br> <i class="fa-solid fa-check"></i> ĐỔI HÀNG TRONG 15 NGÀY</p>
                </div>
            </div>
            <div class="_back-to-home"><a href="home.php"><button>Back to home</button></a></div>
        <?php
        }
    }
    else{echo 'loi';}
    ?>
</body>
</html>