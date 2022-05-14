<link rel="stylesheet" href="../../public/css/detailProduct.css">
<section class="detail-product">
    <div class="container">
        <img src="../../public/img/product-tea-1.jpg" alt="">
        <div class="infomation-product">
            <h1><?= $data["detailProduct"]['nameProduct'] ?></h1>
            <br>
            <h4>$ <?= $data["detailProduct"]['price'] ?></h4>
            <br>
            <p><?= $data["detailProduct"]['description'] ?></p>
            <br>
            <form action="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart/addProductToCart/<?= $data["detailProduct"]['id'] ?>" method="Post">
                <input type="number" min="1" value="1" name="quantity">
                <button class="add-to-cart" type="submit" name="add-to-cart">
                    <h3>Add to cart ></h3>
                </button>
            </form>
        </div>
    </div>
    <img src="../../public/img/detailProduct.PNG" alt="">
</section>