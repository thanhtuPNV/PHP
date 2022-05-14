<link rel="stylesheet" href="<?= $data['link'] ?>./public/css/cartStyle.css">
<div class="wrap">
    <div class="cart-header cf">
        <strong>Your Orders</strong>
        <span class="btn">Checkout</span>
    </div>
    <div class="order-bottom">
        <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/status1" class="text-center">
            <i class="fa-solid fa-hourglass"><span class="quantity-notice"><?= isset($data['statusList']["wait for confirmation"]) ? $data['statusList']["wait for confirmation"] : 0 ?></span></i>
            <p>wait for confirmation</p>
        </a>
        <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/status2" class="text-center">
            <i class="fa-solid fa-box-archive"><span class="quantity-notice"><?= isset($data['statusList']["prepare order"]) ? $data['statusList']["prepare order"] : 0 ?></span></i>
            <p>prepare order</p>
        </a>
        <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/status3" class="text-center">
            <i class="fa-solid fa-truck-fast"><span class="quantity-notice"><?= isset($data['statusList']["delivering"]) ? $data['statusList']["delivering"] : 0 ?></span></i>
            <p>delivering</p>
        </a>
        <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order" class="text-center">
            <i class="fa-solid fa-people-carry-box"><span class="quantity-notice"><?= isset($data['statusList']["successful delivery"]) ? $data['statusList']["successful delivery"] : 0 ?></span></i>
            <p>successful delivery</p>
        </a>
    </div>
    <div class="cart-table">
        <ul class="cart">
            <?php
            if (is_null($data["orderList"])) {
                echo "<h3>Sorry, No product to show!</h3>";
            } else
                foreach ($data["orderList"] as $order) { ?>
                <li class="item-cart">
                    <div class="item-main cf">
                        <div class="col-2">
                            <div>
                                <h4><?= $order['status'] ?></h4>
                                <div class="item-block ib-info cf">
                                    <img class="product-img" src="<?= $data['link'] ?>./public/img/<?= $order['img'] ?>" />
                                    <div class="ib-info-meta">
                                        <span class="title"><?= $order['nameProduct'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="item-block ib-qty">
                                    <span><?= $order['orderAmount'] ?></span>
                                    <span class="price"><span>x </span><?= $order['price'] ?> $</span>
                                    <span class="tp-price"> = <?= $order['price'] * $order['orderAmount'] ?> $</span>
                                </div>
                                <div class="item-block ib-total-price">
                                    <span class="tp-remove"><i class="i-cancel-circle"></i></span>
                                </div>
                                <br><br>
                                <?php if ($order['status'] == "delivering") { ?>
                                    <button type="submit" class="btn-item" onclick="location.href='http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/deleteOrder/<?= $order['idOrder'] ?>'">Cancel</button>
                                    <button type="submit" class="btn-item" onclick="location.href='http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/updateOrder/<?= $order['idOrder'] ?>'">Item Received</button>
                                <?php } elseif ($order['status'] == "successful delivery") { ?>
                                <?php } else { ?>
                                    <button type="submit" class="btn-item" onclick="location.href='http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/order/deleteOrder/<?= $order['idOrder'] ?>'">Cancel</button>
                                <?php } ?>
                            </div>
                        </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>