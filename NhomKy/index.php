<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to come our hotel</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <?php
        include "exc.php";
        ?>
        <div class="container">
            <h1 class="text-center">Danh Sách Các Khách Sạn</h1>
            <div class="products-container">
                <?php foreach ($data as $ele) { ?>
                    <div class="product">
                        <img class="room-img"
                            src="<?php echo $ele['img']?>"
                            alt="">
                        <div class="description">
                            <h2 class="title text-blue"><?php echo $ele["name"]?></h2>
                            <div class="location">
                                <span class="address"><?php echo $ele["address"]?></span> -
                                <span><a href="map.com">Xem trên bản đồ</a></span> -
                                <span class="direction"><?php echo $ele["direction"]?></span>
                            </div>
                            <div class="room-type text-bold"><?php echo $ele["roomType"]?></div>
                            <div class="bed-type"><?php echo $ele["bedType"]?></div>
                            <div class="cancellation text-green">Miễn phí hủy phòng</div>
                        </div>
                        <div class="right-path">
                            <div class="evalution">
                                <span class="reviewing text-center">
                                    <span class="review-rank text-bold"><?php echo $ele["review"]?></span><br>
                                    <span class="review-count"><?php echo $ele["reviewCount"]?></span>
                                </span>
                                <span class="score text-bold text-white"><?php echo $ele["score"]?></span>
                            </div>
                            <div class="price-path">
                                <div>2 người, một đêm</div>
                                <div class="price text-bold text-red"><?php echo $ele["price"]?></div>
                                <div>Đã bao gồm thuế</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> 
        </div>

    </body>

</html>