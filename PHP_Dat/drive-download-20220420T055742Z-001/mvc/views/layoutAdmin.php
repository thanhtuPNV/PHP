<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?= $data["link"] ?>./public/css/stylesChaitan.css">
    <title>Admin</title>
</head>

<body>
    <header id="header">
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
                <li><a href="#"><i class="fa-solid fa-user black"></i> Admin</a></li>
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
                <a href="#"><img class="logo" src="<?= $data["link"] ?>./public/img/logo_04.png" alt="Logo"></a>
                <ul class="main_nav">
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin">Admin</a>
                    </li>
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin">Products</a>
                    </li>
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/userList">User</a>
                    </li>
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/showOrders">Orders</a>
                    </li>
                    <li>
                        <a href="http://localhost/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/showOrdersNeW">Orders New</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="content">
        <?php
        require_once "./mvc/views/pages/" . $data["page"] . ".php";
        ?>
    </div>
</body>

</html>