<?php
session_start();
require_once "./connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>Document</title>
    <style>
        li,a{list-style:none;text-decoration:none}
        ._container{width:100%;padding:13px}
        ._header{width:95%;margin:0 auto;padding:13px;border:1px solid #000;background-color:#F8F8F8}
        ._navbar{width:85%;margin:0 auto;text-align:center}
        ._navbar-nav{display:flex}
        ._nav-item{min-width:10%;font-size:25px}
        ._nav-item>a{text-decoration:none}
        .right>input,.fa-magnifying-glass{border:1px solid #000;}
        .right>input{font-size:20px}
        h3{text-align: center;}
        .content-cart{position: relative;top: 10px;}
        .inf-cus{position: relative;top: 50px;}
        .frm-control{width: 80%;margin: 0 auto;}
        .frm-group{display: flex;padding: 13px 0;}
        .frm-label{min-width: 10%;display: flex;align-items: center;font-size: 20px;}
        .frm-input{flex: 1;text-align: center;}
        .br{border: 1px solid black;width: 90%;margin: 0 auto;top: 40px;position: relative;}
        .tongtatca{padding: 0 95px;font-size: 20px;}
        .footer-clean{padding:100px;background-color:#fff;color:#4b4c4d}.footer-clean h3{margin-top:0;margin-bottom:12px;font-weight:700;font-size:16px}.footer-clean ul{padding:0;list-style:none;line-height:1.6;font-size:14px;margin-bottom:0}.footer-clean ul a{color:inherit;text-decoration:none;opacity:.8}.footer-clean ul a:hover{opacity:1}.footer-clean .item.social{text-align:right}@media (max-width:767px){.footer-clean .item{text-align:center;padding-bottom:20px}}@media (max-width:768px){.footer-clean .item.social{text-align:center}}.footer-clean .item.social>a{font-size:24px;width:40px;height:40px;line-height:40px;display:inline-block;text-align:center;border-radius:50%;border:1px solid #ccc;margin-left:10px;margin-top:22px;color:inherit;opacity:.75}.footer-clean .item.social>a:hover{opacity:.9}
    </style>
</head>
<body>
<div class="_container">
    <div class="_header">
        <div class="_navbar">
            <ul class="_navbar-nav">
                <li class="_nav-item"><a href="home.php">Trang Chủ</a></li>
                <li class="_nav-item"><a href="">Dịch Vụ</a></li>
                <li class="_nav-item"><a href="">Sản Phẩm</a></li>
                <li class="_nav-item"><a href="">Liên Hệ</a></li>
                <li class="_nav-item right"><input type="text" placeholder="Nhập từ khóa..."><i class="fa-solid fa-magnifying-glass"></i></li>
                <li class="_nav-item right"><a href=""><i class="fa-solid fa-cart-arrow-down"></i><?= sizeof($_SESSION['cart']) ?> sản phẩm</a></li>
                <li class="_nav-item right"><a href="">Đăng nhập</a></li>
                <li class="_nav-item right"><a href="">Đăng ký</a></li>
            </ul>
        </div>
    </div>
    <!--  -->
    <div class="content-cart">
        <!--  -->
        <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table class="tbl-cart">
                    <tr class="tbl-tr">
                        <th class="tbl-items">Ảnh sản phẩm</th>
                        <th class="tbl-items">Tên sản phẩm</th>
                        <th class="tbl-items">Số lượng</th>
                        <th class="tbl-items">Giá</th>
                        <th class="tbl-items">Giảm giá</th>
                        <th class="tbl-items">Tổng giá</th>
                    </tr>
                    <?php
                    //    showgiohang();
                    foreach($_SESSION['cart'] as $oderDetail){?>
                    <tr>
                        <td><?= $oderDetail['image'] ?></td>
                        <td><?= $oderDetail['name'] ?></td>
                        <td><?= $oderDetail['quantity'] ?></td>
                        <td><?= $oderDetail['price'] ?></td>
                        <td><?= $oderDetail[$discount] ?></td>
                        <td><?= $oderDetail[($productData['price']*$product["quantity"]-$discount)] ?></td>
                    </tr>
                    <?php }
                    ?>       
                </table>
            </form>
        <!--  -->
        <div class="inf-cus">
            <div><h3>Thông tin người nhận</h3></div>
            <form action="" class="frm-control">
                <div class="frm-group">
                    <label class="frm-label" for="">Tên khách hàng: </label>
                    <input class="frm-input" type="text" name="name" id="name">
                </div>
                <div class="frm-group">
                    <label class="frm-label" for="">Email: </label>
                    <input class="frm-input" type="text" name="mail" id="mail">
                </div>
                <div class="frm-group">
                    <label class="frm-label" for="">Số điện thoại: </label>
                    <input class="frm-input" type="text" name="phonenumber" id="phonenumber">
                </div>
                <div class="frm-group">
                    <label class="frm-label" for="">Địa chỉ: </label>
                    <input class="frm-input" type="text" name="address" id="address">
                </div>
                <div class="frm-group">
                    <label class="frm-label" for="">Ngày đặt hàng: </label>
                    <input class="frm-input" type="text" name="date" id="date">
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
    <!-- footer -->
    <div class="footer-clean">
        <footer>
            <div class="_container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Company Name © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</div>
</body>
</html>