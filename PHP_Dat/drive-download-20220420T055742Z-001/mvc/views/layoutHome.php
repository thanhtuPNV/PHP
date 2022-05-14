<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="./CSS/style.css"> -->
    <title>OTAKUVN</title>
</head>

<body>
    <header>
        <div class="main">
            <a class="logo" href="#"><img src="public/Img/LOGO SHOP.PNG" alt="Logo Shop"></a>
            <div class="search">
                <form>
                    <input type="text" placeholder="Tìm kiếm sản phẩm, môn thể thao...">
                    <i class="fas fa-search"></i>
                </form>
            </div>
            <div class="menu">
                <div class="Table_of_Contents">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i id=" login" class="fas fa-users-cog font"></i>
                        <p id="login1">User</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-store font"></i>
                        <p>Cửa hàng</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-envelope font"></i>
                        <p>Liên hệ</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-shopping-cart font position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span id="quantity" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">
                                0
                            </span>
                        </i>
                        <p>Giỏ hàng</p>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="Horizontal_ladder"></div>
        <img class="mySlides" src="public/Img/Backgroud1.jpg" style="width:100%">
        <div id="slider">
            <img class="mySlides" src="public/Img/Backgroud1.jpg" style="width:100%">
            <img class="mySlides" src="public/Img/backtosport.jpg" style="width:100%">
            <button id="move_left" onclick="plusDivs(-1)">&#10094;</button>
            <button id="move_right" onclick="plusDivs(1) ">&#10095;</button>
        </div>
        <div style="text-align:center ">
            <span class="dot " onclick="currentSlide(0) "></span>
            <span class="dot " onclick="currentSlide(1) "></span>
        </div>
        <script src="./JS/silder.js "></script>
    </header>
    <div class="content">
        <?php
        require_once "./mvc/views/pages/" . $data["page"] . ".php";
        ?>
    </div>
    <section class="address">
        <h1>ĐỊA CHỈ CỦA CỬA HÀNG OTKUVN VÀ ĐỐI TÁC CLICK&COLLECT</h1>
        <img style="wigth:100vh;" src="public/Img/Địa chỉ2.jpg" alt="Photo">
        <div class="information">
            <div id="address"><i class="fas fa-map-marker-alt font"></i> Địa Chỉ: Thành Phố HCM: Quận 2,Vincom Mega Mall Thảo Điền. Thủ Đô HN: Cửa hàng Thanh Xuân, Vincom Royal City</div>
            <div><i class="fas fa-envelope font"></i>Email: Thành Phố Hồ Chí Minh:
                <a href="#">otakuvnhcmq2@gmail.com</a> --- Thủ Đô Hà Nội:
                <a href="#">otakvnhntx@gmail.com</a>
            </div>
            <div><i class="fas fa-phone font"></i>SĐT: Thành Phố Hồ Chí Minh: (+084) 0933-033-033--- Thủ Đô Hà Nội: (+084) 0933-033-032</div>
        </div>
        <div class="row">
            <div class="social0-network">
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-google-plus-square"></i>
            </div>
            <div class="input">
                <form>
                    <input type="text" placeholder="Bình Luận">
                    <input id="submit" class="key" type="submit" value="Gửi">
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyringht &copy; 2021 by SHOP OTAKUVN</p>
    </footer>
    <!-- modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Quản Lý Tài Khoản</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h5>Họ và Tên: <?= $data["account"]["name"] ?></h5>
            <h5>Số Điện Thoại: <?= $data["account"]["phoneNumber"] ?></h5>
            <h5>Địa Chỉ: <?= $data["account"]["address"] ?></h5>
        </div>
        <div class="offcanvas-footer">
            <button type="button" class="btn btn-primary" onclick="location.href = 'http:/localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home/logout'">Đăng Xuất</button>
        </div>
    </div>
</body>

</html>