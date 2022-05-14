<link rel="stylesheet" href="./public/css/cartStyle.css">
<div class="wrap">
    <div class="cart-header cf">
        <strong>Your Cart</strong>
        <span class="btn">Checkout</span>
    </div>
    <div class="cart-table">
        <ul class="cart">
            <?php
            if (is_null($data["cartList"])) {
                echo "<h3>Sorry, No product to show!</h3>";
            } else
                foreach ($data["cartList"] as $cart) { ?>
                <li class="item-cart">
                    <div class="item-main cf">
                        <div class="col-2">
                            <div>
                                <input type="checkbox">
                                <div class="item-block ib-info cf">
                                    <img class="product-img" src="./public/img/<?= $cart['img'] ?>" />
                                    <div class="ib-info-meta">
                                        <span class="title"><?= $cart['nameProduct'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <form action="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/buyProduct/<?= $cart['idCart'] ?>" method="Post">
                                    <div class="item-block ib-qty">
                                        <input type="number" value="<?= $cart['cartQuantity'] ?>" class="qty" min="1" name="amount" />
                                        <span class="price"><span>x</span> $ <?= $cart['productsPrice'] ?></span>
                                    </div>
                                    <div class="item-block ib-total-price">
                                        <span class="tp-price">$ <?= $cart['productsPrice'] * $cart['cartQuantity'] ?></span>
                                        <span class="tp-remove"><i class="i-cancel-circle"></i></span>
                                    </div>
                                    <br><br>
                                    <button class="btn-item" type="submit" name="buy">
                                        Buy
                                    </button>
                                    <button type="button" class="btn-item" onclick="location.href='http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/cart/deleteCart/<?= $cart['idCart'] ?>'">Delete</button>
                                </form>
                            </div>
                        </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="sub-table cf">
        <div class="summary-block">
            <div class="sb-promo">
                <input type="text" placeholder="Enter Promo Code" />
                <span class="btn">Apply</span>
            </div>
            <ul>
                <?php
                if (is_null($data["cartList"])) {
                    echo "<h3>Sorry, No product to show!</h3>";
                } else
                    $total = 0;
                foreach ($data["cartList"] as $cart) {
                    $total = $total + $cart["productsPrice"] * $cart["cartQuantity"];
                } ?>
                <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value"><?= $total ?></span></li>
            </ul>
        </div>
    </div>

    <div class="cart-footer cf">
        <span class="btn">Checkout</span>
        <span class="cont-shopping"><i class="i-angle-left"></i>Back</span>
    </div>
</div>