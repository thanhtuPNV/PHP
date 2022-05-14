<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .warning{
            color: yellow;
        }
    </style>
</head>

<body>
    <?php
    include './phone.php';
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"><img style="height: 50px;" src="https://img.websosanh.vn/v10/users/review/images/v6ykjnwu4a5xf/iphone-13-mau-hong.jpg?compress=85" alt=""></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="model">
            <div class="">
                <?php
                $br = "<br>";
                foreach ($product as $key => $value) {
                    echo "<h1 class='model_title  '>*$key*</h1>";
                    echo "<br>";
                    echo '  <div class = "d-flex justify-content-between">';
                    foreach ($value as $subKey => $subValue) {
                        // echo "$subKey";
                        $name = $subValue['name'];
                        $img = $subValue['img'];
                        $price = $subValue['price'];
                        $note = $subValue['note'];
                        $star = $subValue['star'];
                        $comment = $subValue['comment'];
                        $print_star = '';
                        $star_icon = '<i class="bi bi-star-fill warning"></i>';
                        $star_icon_border = '<i class="bi bi-star"></i>';
                        for ($i = 1; $i < 6; $i++) {
                            if($i <= $star){
                                $print_star = $print_star . $star_icon;
                            }
                            else $print_star = $print_star . $star_icon_border;
                        }
                        echo ' 
                        <div class="card" style="width: 18rem;">
                            <img src=" ' . $img . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $name . '</h5>
                                <p class="card-text">' . $price . 'vnđ</p>
                                 <p class="card-text">' . $print_star . '</p>
                                  <p class="card-text">' . $comment . ' bình luận</p>
                                <a href="#" class="btn btn-primary">mua ngay</a>
                            </div>
                        </div>
                    ' . $br;
                    }
                    echo ' </div>';
                }

                ?>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>