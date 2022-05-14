<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="<?= $data["link"] ?>./public/css/stylesChaitan.css">
    <title>Chaitan</title>
</head>

<body id="body">
    <header>
        <div class="header-top">
            <ul class="main_contact">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook-square black"></i> +20-800-33-000</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-location-dot black"></i> Regione Venetta, 21/100, Milano, Italy</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-clock black"></i> Monday-Sunday 9:00 - 23:00</a>
                </li>
            </ul>
            <ul class="main_icon">
                <?php
                // session_start();
                if ($_SESSION != null) { ?>
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass black" onclick="searching()"></i></a></li>
                    <li><a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart"><i class="fa-solid fa-cart-shopping black"></i> <span id="cart-number" class="black"><?= $data["countCarts"] ?></span></a></li>
                    <li onclick="openNav()"><a href="#"><i class="fa-solid fa-user black"></i> <?= $_SESSION["userName"] ?></a></li>
                <?php } else { ?>
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass black" onclick="searching()"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping black"></i> <span id="cart-number" class="black">0</span></a></li>
                    <li><a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/loginSignup"><i class="fa-solid fa-user black"></i> login</a></li>
                <?php } ?>
            </ul>
            <div class="searching">
                <div id="modal-searching" class=" search-content-item input-group flex-nowrap">
                    <input id="input-search" type="text" class="form-control input-search" placeholder="Searching...">
                    <!-- <span class="input-group-text addon-wrapping" id="addon-wrapping"><button type="button" class="btn-close delete" aria-label="Close"></button></span> -->
                    <div class="autobox">
                        <li>Hà Nội</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <nav class="sticky">
                <a href="#"><img class="logo" src="<?= $data['link'] ?>./public/img/logo_04.png" alt="Logo"></a>
                <ul class="main_nav">
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/">Home</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home/productList">Products</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-bottom">
            <div class="blog-left">
                <div class="icon">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-google-plus-g"></i>
                    <hr width="2%" align="center" />
                </div>
                <div class="follow">
                    <p>Follow us</p>
                </div>
            </div>
            <div class="blog-center">
                <h1>Products</h1>
                <br>
                <h4>Home > Products</h4>
            </div>
            <div class="blog-rigth">
                <img class="icon-tea" src="<?= $data['link'] ?>./public/img/—Pngtree—black line drawing hand drawn_5574682.png" alt="">
            </div>
        </div>
    </header>
    <div class="content">
        <?php
        require_once "./mvc/views/pages/" . $data["page"] . ".php";
        ?>
    </div>
    <section class="brans container">
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-1.png" alt="logo">
        </div>
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-2.png" alt="logo">
        </div>
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-3.png" alt="logo">
        </div>
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-4.png" alt="logo">
        </div>
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-5.png" alt="logo">
        </div>
        <div class="bran">
            <img src="<?= $data['link'] ?>./public/img/bran-6.png" alt="logo">
        </div>
    </section>
    <footer>
        <img src="<?= $data['link'] ?>./public/img/footer.PNG" alt="footer">
    </footer>
    <?php
    // session_start();
    if ($_SESSION != null) { ?>
        <div id="mySidenav" class="sidenav">
            <div class="sidenav-Top">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <h2 class="avarta"><i class="fa-solid fa-user-large"></i> <?= $_SESSION["userName"] ?></h2>
            </div>
            <div class="order">
                <div class="order-top">
                    <h5>
                        <i class="fa-solid fa-calendar-day"></i> Order
                    </h5>
                    <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order">View purchase history ></a>
                </div>
                <div class="order-bottom">
                    <div class="text-center">
                        <i class="fa-solid fa-hourglass"><span class="quantity-notice"><?= isset($data['statusList']["wait for confirmation"]) ? $data['statusList']["wait for confirmation"] : 0 ?></span></i>
                        <p>wait for confirmation</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-box-archive"><span class="quantity-notice"><?= isset($data['statusList']["prepare order"]) ? $data['statusList']["prepare order"] : 0 ?></span></i>
                        <p>prepare order</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-truck-fast"><span class="quantity-notice"><?= isset($data['statusList']["delivering"]) ? $data['statusList']["delivering"] : 0 ?></span></i>
                        <p>delivering</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-people-carry-box"><span class="quantity-notice"><?= isset($data['statusList']["successful delivery"]) ? $data['statusList']["successful delivery"] : 0 ?></span></i>
                        <p>successful delivery</p>
                    </div>
                </div>
            </div>
            <h2 class="text-center info">Personal Information</h2>
            <div id="info">
                <div class="info">
                    <h4>Name: <?= $data["account"]["name"] ?></h4>
                    <h4>Phone Number: <?= $data["account"]["phoneNumber"] ?></h4>
                    <h4>Address: <?= $data["account"]["address"] ?></h4>
                    <div class="container" id="cancal">
                        <button class="read-more" type="button" onclick="cancal()">
                            <h3>Cancal ></h3>
                        </button>
                    </div>
                </div>
                <div class="update-info info" id="update-info">
                    <form action="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home/updateUser" method="Post">
                        <div class="input-block">
                            <label for="name" class="input-label">Name</label>
                            <input type="text" name="name-update" id="name" value="<?= $data["account"]["name"] ?>" required>
                        </div>
                        <div class="input-block">
                            <label for="phonenumber" class="input-label">Phone Number</label>
                            <input type="number" name="phonenumber-update" id="phonenumber" value="<?= $data["account"]["phoneNumber"] ?>" required>
                        </div>
                        <div class="input-block">
                            <label for="address" class="input-label">Adderss</label>
                            <input type="text" name="address-update" id="address" value="<?= $data["account"]["address"] ?>" required>
                        </div>
                        <div class="input-block">
                            <label for="passwordlogin" class="input-label">Password</label>
                            <input type="password" name="password-update" id="passwordlogin" value="<?= $data["account"]["password"] ?>" required>
                        </div>
                        <div class="modal-buttons">
                            <button class="read-more" type="submit" name="update-user">
                                <h3>Update</h3>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="button">
                <div class="container">
                    <button class="read-more" type="button" onclick="update_formation()">
                        <h3>Update Information ></h3>
                    </button>
                </div>
                <div class="container">
                    <button type="button" class="read-more" onclick="location.href = 'http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home/logout'">
                        <h3>Log Out</h3>
                    </button>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "650px";
            document.getElementById("main").style.marginLeft = "650px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script src="<?= $data['link'] ?>./public/js/chaitan.js"></script>
</body>

</html>