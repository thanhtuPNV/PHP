<link rel="stylesheet" href="../public/css/productStyles.css">
<section class="container">
    <div class="col-2">
        <div class="choose-type">
            <img src="../public/img/productBackground.PNG" alt="">
        </div>
        <div class="product-list">
            <?php
            if (is_null($data["productList"])) {
                echo "<h3>Sorry, No product to show!</h3>";
            } else
                foreach ($data["productList"] as $product) { ?>
                <div class="item text-center">
                    <img src="../public/img/<?= $product['img'] ?>" alt="product">
                    <h1><?= $product['nameProduct'] ?></h1>
                    <br>
                    <p>Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, ...</p>
                    <br>
                    <p class="money">$<?= $product['price'] ?></p>
                    <div class="button">
                        <div>
                            <button class="more-info" type="button" onclick="location.href='http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home/detailProduct/<?=$product['id']?>'">
                                <h3>More info ></h3>
                            </button>
                        </div>
                        <div>
                            <button class=" add-to-cart" type="button">
                                <h3>Add to cart ></h3>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
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