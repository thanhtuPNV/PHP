<?php
session_start();
    function showgiohang(){
        include("./connect.php");
        if(isset($_SESSION['cart'])&&(is_array($_SESSION['cart']))){
            if(sizeof($_SESSION['cart'])>0){
                $number = 1;
                $tongtatca=0;
                foreach($_SESSION["cart"] as $product) {
                    $productData = mysqli_query($conn, "select * from pro where Id_products={$product["id"]}")->fetch_assoc();
                    $discount = $productData['price'] *0.1*$product["quantity"];
                    $tongtatca+=($productData['price']*$product["quantity"]-$discount);
                    echo 
                    '<tr>
                        <td class="tbl-items">'.$number.'</td>
                        <td class="tbl-items"> <img src="img/'.$productData["image"].'" /></td>
                        <td class="tbl-items">'.$productData['name'].'</td>
                        <td class="tbl-items"><input class="iquantity" type="number" min="1" value="'.$product["quantity"].'" id="quantity-'.$number.'" oninput="updateTotal('.$number.')"></td>
                        <td class="tbl-items">'.$productData['price'].'</td>
                        <td class="tbl-items">'.$discount.'</td>
                        <td class="tbl-items" class="isubtotal">'.($productData['price']*$product["quantity"]-$discount).'</td>
                        <td class="tbl-items"><a href="deleteCart.php?idItem='.$product["id"].'"><i class="fa-solid fa-circle-minus"></i></a></td>
                    </tr>';
                    $number++;
                }
                echo '<p class="tongtatca">Tổng tiền: <b>'.$tongtatca.' VND</b></p>';

            }else{
                echo '<p class="tongtatca"><b>Giỏ hàng rỗng!</b></p>';
            }    
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        .content-cart{position: relative;top: 10px;}  
        .tittle-cart{width: 25%;margin: 0 auto;background-color: #A31E32;color: white;top: 10px;padding: 10px 20px;}
        .tittle-cart>h2{text-align: center;}
        .tbl-cart{width: 90%;margin: 0 auto;position: relative;top: 10px;border: 1px solid black;}
        .tbl-tr{border: 1px solid black;}
        .tbl-items{border: 1px solid black;text-align: center;}
        .tbl-items input{border: none;outline: none;}
        .tbl-items img{width: 150px;height: auto;padding: 10px;}
        .btn-cart{display: flex;justify-content: space-around;position: relative;top: 20px;}
        .btn-left{display: flex;gap: 20px;}
        .btn-left>p{display: flex;align-items: center;margin: 0 auto;font-weight: 900;font-size: 20px;}
        .btn-items{border: none;outline: none;cursor: pointer;font-size: 20px;padding: 10px;}
        .btn-items:hover {background-color: black;color: white;}
        .inf-cus{position: relative;top: 50px;}
        .frm-control{width: 80%;margin: 0 auto;}
        .frm-group{display: flex;padding: 13px 0;}
        .frm-label{min-width: 10%;display: flex;align-items: center;font-size: 20px;}
        .frm-input{flex: 1;text-align: center;}
        .tongtatca{padding: 0 95px;font-size: 20px;}
        .footer-clean{padding:100px;background-color:#fff;color:#4b4c4d}.footer-clean h3{margin-top:0;margin-bottom:12px;font-weight:700;font-size:16px}.footer-clean ul{padding:0;list-style:none;line-height:1.6;font-size:14px;margin-bottom:0}.footer-clean ul a{color:inherit;text-decoration:none;opacity:.8}.footer-clean ul a:hover{opacity:1}.footer-clean .item.social{text-align:right}@media (max-width:767px){.footer-clean .item{text-align:center;padding-bottom:20px}}@media (max-width:768px){.footer-clean .item.social{text-align:center}}.footer-clean .item.social>a{font-size:24px;width:40px;height:40px;line-height:40px;display:inline-block;text-align:center;border-radius:50%;border:1px solid #ccc;margin-left:10px;margin-top:22px;color:inherit;opacity:.75}.footer-clean .item.social>a:hover{opacity:.9}
        /* Model */
        .modal {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(77, 77, 77, .7);
        transition: all .4s;
        }

        .modal:target {
        visibility: visible;
        opacity: 1;
        }

        .modal__content {
        border-radius: 4px;
        position: relative;
        width: 500px;
        max-width: 90%;
        background: #fff;
        padding: 5em 2em;
        }
        .modal__close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #585858;
        text-decoration: none;
        }
        /* inf cus */
        .frm-group{display: flex;}
        .frm-label{min-width: 40%;display: flex;align-items: center;font-size: 17px;}
        .frm-input{flex: 1;text-align: center;}
        .frm-submit{border: none;outline: none;cursor: pointer;background-color: #A31E32;color: white;font-weight: 500;}
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
            <div class="tittle-cart">
                <h2>THÔNG TIN MUA HÀNG</h2>
            </div>
            <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table class="tbl-cart">
                    <tr class="tbl-tr">
                        <th class="tbl-items">Id</th>
                        <th class="tbl-items">Ảnh sản phẩm</th>
                        <th class="tbl-items">Tên sản phẩm</th>
                        <th class="tbl-items">Số lượng</th>
                        <th class="tbl-items">Giá</th>
                        <th class="tbl-items">Giảm giá</th>
                        <th class="tbl-items">Tổng giá</th>
                        <th class="tbl-items">Xóa</th>
                    </tr>
                    <?php
                       showgiohang();
                    ?>       
                </table>
            </form>
            <div class="btn-cart">
                <div class="btn-left">
                    <button class="btn-items" onclick="location.href='cart.php'">Cập nhật giỏ hàng</button>
                </div>
                <div class="btn-right">
                    <button class="btn-items" onclick="location.href='home.php'">Tiếp tục mua hàng</button>
                    <button class="btn-items" onclick="location.href='deleteCart.php?idCancel=0'">Hủy giỏ hàng</button>
                    
                    <?php if(empty($_SESSION['cart'])){
                        echo '';
                    }else{ ?>
                        <button class="btn-items" onclick="location.href='#demo-modal'">Tiến hành mua hàng</button>
                    <?php }
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
    </div>
    <!-- Model -->
    <div id="demo-modal" class="modal">
        <div class="modal__content">
            <div class="inf-cus">
                <div><h3>Thông tin người nhận</h3></div>
                    <form action="orderBill.php" class="frm-control" method="POST">
                        <div class="frm-group">
                            <label class="frm-label" for="">Tên khách hàng: </label>
                            <input class="frm-input" type="text" name="name" id="name" value="">
                        </div>
                        <div class="frm-group">
                            <label class="frm-label" for="">Email: </label>
                            <input class="frm-input" type="text" name="mail" id="mail" value="">
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
                        <!-- <input type="Submit" class="frm-submit" name="submitOrderrrrr"> -->
                        <button class="frm-submit" name="button">Save</button>
                    </form>
                </div>

            <a href="#" class="modal__close">&times;</a>
        </div>
    </div>
    <!-- Model -->
    <script src="tongTien.js"></script>
</body>
</html>