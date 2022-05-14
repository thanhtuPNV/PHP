<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Document</title>
    <style>
        #content{   
            display: flex;
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;    
            background-image: linear-gradient(to right, red , yellow);
        }
        .item{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            row-gap: 2%;
            text-align: center;
        }
        .card{
            background-color: darkmagenta;
        }
        @media screen and (max-width: 992px)  {
            .item{
            display: grid;
            grid-template-columns:  1fr 1fr;
            row-gap: 2%;
            text-align: center;
        }
        }
        @media screen and (max-width: 600px)  {
            .item{
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 2%;
            column-gap:3%;
            text-align: center;
            }
        }
    </style>
</head>
<body>
<form action="storephoneusearray.php" method="POST" class ="login">
        <h1>Danh mục thêm sản phẩm</h1>
        <table>
            <tr>
                <td><label for="">Tên sản phẩm</label></td>
                <td><input type="text" name ="nameproduct"></td>
            </tr>
            <tr>
                <td><label for="">Giá sản phẩm</label></td>
                <td><input type="text" name = "priceproduct"></td>
            </tr>
            <tr>
                <td><label for="">Link hình ảnh của sản phẩm</label></td>
                <td><input type="text" name = "linkimage"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Thêm sản phẩm" id = "confirm">
</form>
<!-- Tìm kiếm -->
<form action="storephoneusearray.php" method="POST" class ="login">
    <h1>Tìm kiếm sản phẩm</h1>
    <table>
        <tr>
            <td><label for="">Nhập tên sản phẩm</label></td>
            <td><input type="text" name ="nameproduct"></td>
            <button type="submit" name="submit">Tìm</button>
        </tr>
    </table>
</form>
<!-- PHP -->
<?php

?>
<!-- Tìm kiếm -->
<br>
    <?php
    error_reporting(0);
    include "./data.php";
    if (isset($_POST["nameproduct"]) && isset($_POST['priceproduct']) && isset($_POST['linkimage'])){
        $tensp = $_POST['nameproduct'];
        $giasp = $_POST['priceproduct'];
        $anh = $_POST['linkimage'];

        $dt4 = array(
        "img" =>$anh,
        "phonename" => $tensp,
        "phoneprice" => $giasp,
        "star" => "4",
    );
    }
    array_push($phone['spnb'],$dt4);
    ?>
    <?php

    ?>
   </div>
    <div class="product">
        <h1 id = "content">Nổi bật nhất</h1>
    </div>
    <div class="item">
        <?php
        foreach($phone as $key => $value){
           foreach($value as $key1 =>$value1){
               $img = $value1['img'];
               $phonename =  $value1['phonename'];
               $phoneprice = $value1['phoneprice'];
               $star = $value1['star'];
               echo '
                    <div class="card col-md-3 col-sm-6 col-12" style="max-width:97%;">
                                <img class="card-img-top" src="'.$img.'" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"> '.$phonename.'</p>
                                    <p class="card-text"> '.$value1['phoneprice'].'</p>
                                    <p class="card-text"> Bình luận</p>
                                    <button> Mua ngay</button>
                                    <button> Chỉnh sửa</button>
                                    <button> Xóa</button>
                                </div>
                            </div>
               ';

           }
        }
        ?>
    </div>
</body>
</html>