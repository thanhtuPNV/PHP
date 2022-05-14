<link rel="stylesheet" href="../../public/css/detailProduct.css">
<section class="detail-product">
    <div class="container">
        <h1>Order Detail</h1>
    </div>
    <div class="container">
        <div class="col2">
            <img src="../../public/img/<?= $data['orderDetail']['img'] ?>" alt="">
            <div class="infomation-product">
                <h1><?= $data["orderDetail"]['nameProduct'] ?></h1>
                <br>
                <h4>Price/Product: <?= $data["orderDetail"]['price'] ?>$</h4>
                <br>
                <p>Amount: <?= $data["orderDetail"]['amount'] ?></p>
                <p>Total: <?= $data["orderDetail"]['total'] ?> $</p>
                <p>User Name: <?= $data["orderDetail"]['userName'] ?></p>
                <p>Phone Number: <?= $data["orderDetail"]['phoneNumber'] ?></p>
                <p>Address: <?= $data["orderDetail"]['address'] ?></p>
                <br>
            </div>
        </div>
    </div>
</section>