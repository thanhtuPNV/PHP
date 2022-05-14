<?php
require "HCN_OPP.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="HCN.php" method="POST" class="mt-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Chiều dài: </label>
            <input type="text" class="form-control" name="lenght">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Chiều rộng</label>
            <input type="text" class="form-control" name="width">
        </div>
        <input type="submit" class="btn btn-primary" value="submit">
    </form>
    <div>
        <?php echo empty($message) ? "" : $message ?>
    </div>
    <?php
    if (isset($_POST["lenght"]) && isset($_POST["width"])){
        $dai = $_POST["lenght"];
        $rong = $_POST["width"];
        $obj = new Rectangle;
        $obj->length = $dai;
        $obj->width = $rong;
        echo "Chu vi: " . $obj->getPerimeter();
        echo "<br>";
        echo "Diện tích: " . $obj->getAria();
    }else{
        $message = "Empty!";
    }
    ?>
</body>
</html>