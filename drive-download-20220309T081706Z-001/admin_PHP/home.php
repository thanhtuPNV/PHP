<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    /* homepage */*{margin:0;padding:0;box-sizing:border-box}
    li{list-style:none;}
    a{text-decoration:none;}
    input,button{font-size:20px}
    ._container{width:100%;padding:13px}
    ._header{width:95%;margin:0 auto;padding:13px;border:1px solid #000;background-color:#F8F8F8}
    ._navbar{width:85%;margin:0 auto;text-align:center}
    ._navbar-nav{display:flex}
    ._nav-item{min-width:10%;font-size:25px}
    ._nav-item>a{text-decoration:none;}
    .right>input,.fa-magnifying-glass{border:1px solid #000}
    .content{width:94%;margin:0 auto}
    .tittle-pr{background-color:#A31E32;width:15%;font-size:30px;padding:10px;color:#fff;position:absolute;top:10px;position:relative}
    .content-show{position:relative;}
    .content-pr{border-top:1px solid #000;position:relative;top:20px;padding:0 120px;}
    .cart{border:1px solid grey;position:absolute;position:relative;top:20px;height:470px;display: inline-block;}
    #name,#price{text-align:center;text-transform:uppercase;padding:5px;}
    .cart-btn{text-align:center;display: flex;justify-content: center;gap: 10px;}
    .cart-btn>a>b{font-size: 18px;padding: 10px;text-decoration:none}
    .cart-btn>a{text-decoration:none;}
    #cart-img{width:300px;height:auto}
    .footer-clean{padding:100px;background-color:#fff;color:#4b4c4d}.footer-clean h3{margin-top:0;margin-bottom:12px;font-weight:700;font-size:16px}.footer-clean ul{padding:0;list-style:none;line-height:1.6;font-size:14px;margin-bottom:0}.footer-clean ul a{color:inherit;text-decoration:none;opacity:.8}.footer-clean ul a:hover{opacity:1}.footer-clean .item.social{text-align:right}@media (max-width:767px){.footer-clean .item{text-align:center;padding-bottom:20px}}@media (max-width:768px){.footer-clean .item.social{text-align:center}}.footer-clean .item.social>a{font-size:24px;width:40px;height:40px;line-height:40px;display:inline-block;text-align:center;border-radius:50%;border:1px solid #ccc;margin-left:10px;margin-top:22px;color:inherit;opacity:.75}.footer-clean .item.social>a:hover{opacity:.9}
    .cart-btn>a{font-size:18px;padding:5px;border-radius:20px;cursor:pointer;outline:none;border:1px solid grey}
    #price{color: #A31E32;}
    #name{font-weight: 500;}

</style>
<body>
    <?php
    require_once("./connect.php");
    session_start();
    $idUser = $_GET['idUser'];
    // $_SESSION['IDUSER'] = $idUser;
    if(empty($_SESSION['cart'])) $_SESSION['cart'] = [];
    ?>
    <div class="_container">
        <div class="_header">
            <div class="_navbar">
                <ul class="_navbar-nav">
                    <li class="_nav-item"><a href="home.php">Trang Chủ</a></li>
                    <li class="_nav-item"><a href="">Dịch Vụ</a></li>
                    <li class="_nav-item"><a href="">Sản Phẩm</a></li>
                    <li class="_nav-item"><a href="">Liên Hệ</a></li>
                    <li class="_nav-item right"><input type="text" placeholder="Nhập từ khóa..."><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li class="_nav-item right"><a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i> <?= sizeof($_SESSION['cart']) ?> sản phẩm</a></li>
                    <li class="_nav-item right"><a href="">Đăng nhập</a></li>
                    <li class="_nav-item right"><a href="">Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <div><img style="width:184vh;" src="./img/trang bìa.jpg" alt=""></div>
        <div class="content-show">
            <div class="tittle-pr"><p><b>SẢN PHẨM MỚI</b></p></div>
            <div class="content-pr">
                <?php
                $sql = 'SELECT * FROM pro';
                $result = mysqli_query($conn, $sql);
                if ($result){
                    while($row = mysqli_fetch_assoc($result))
                    {?>
                            <div class="cart">
                                <img id="cart-img" src="./img/<?php echo $row['image'] ?>">
                                <p id="name"><?php echo $row['name'] ?></p>
                                <p id="price">Giá: <?php echo $row['price'] ?> VND</p>
                                <div class="cart-btn">
                                    <a href="addcart.php?id=<?=$row['Id_products']?>"><b>Mua ngay</b></a>
                                    <a href="details.php?id=<?= $row['Id_products'];?>"><b>Chi tiết</b></a>
                                </div>
                            </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
    <!--  -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>