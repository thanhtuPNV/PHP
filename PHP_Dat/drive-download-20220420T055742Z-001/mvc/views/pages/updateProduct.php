<!-- <script src=”https://unpkg.com/babel-standalone@6/babel.min.js”></script>
<link rel="stylesheet" href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/css/styleModal.css">
<div class="modal">
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Sửa Sản Phẩm</h1>
            <form action="" method="Post">
                <div class="input-block">
                    <label for="name" class="input-label">Name</label>
                    <input type="text" name="update-name-product" id="name-product" value="<?= $data["detailProduct"]["nameProduct"] ?>">
                </div>
                <input type="hidden" name="img-old" id="img" value="<?= $data["detailProduct"]["img"] ?>">
                <div class=" input-block">
                    <label for="img" class="input-label">Img</label>
                    <input type="file" name="update-img" id="img" value="<?= $data["detailProduct"]["img"] ?>">
                </div>
                <div class="input-block">
                    <label for="price" class="input-label">Price</label>
                    <input type="number" name="update-price" id="price" value="<?= $data["detailProduct"]["price"] ?>">
                </div>
                <div class="input-block">
                    <label for="amount" class="input-label">Amount</label>
                    <input type="number" name="update-amount" id="amount" value="<?= $data["detailProduct"]["amount"] ?>">
                </div>
                <div class="input-block">
                    <label for="description" class="input-label">Description</label>
                    <input type="text" name="update-description" id="description" value="<?= $data["detailProduct"]["description"] ?>">
                </div>
                <div class="modal-buttons">
                    <button class="input-button" type="submit" name="update-product">Sửa</button>
                    <button class="input-button" name="cancalUpdateProduct">Thoát</button>
                </div>
            </form>
        </div>
        <div class="modal-right">
            <img src="https://shopvothuat.net/upload/files/quan-bong-ro-jd-SVT-39-1.jpg" alt="">
        </div>
    </div>
</div>
<script src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/js/modal.js"></script> -->

<script src=”https://unpkg.com/babel-standalone@6/babel.min.js”></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/css/modalChaitan.css">
<div class="modal">
    <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin"><i class="fa-solid fa-xmark"></i></a>
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Update</h1>
            <form action="" method="Post">
                <div class="input-block">
                    <label for="name" class="input-label">Name</label>
                    <input type="text" name="update-name-product" id="name-product" value="<?= $data["detailProduct"]["nameProduct"] ?>">
                </div>
                <input type="hidden" name="img-old" id="img" value="<?= $data["detailProduct"]["img"] ?>">
                <div class=" input-block">
                    <label for="img" class="input-label">Img</label>
                    <input type="file" name="update-img" id="img" value="<?= $data["detailProduct"]["img"] ?>">
                </div>
                <div class="input-block">
                    <label for="price" class="input-label">Price</label>
                    <input type="number" name="update-price" id="price" value="<?= $data["detailProduct"]["price"] ?>">
                </div>
                <div class="input-block">
                    <label for="amount" class="input-label">Amount</label>
                    <input type="number" name="update-amount" id="amount" value="<?= $data["detailProduct"]["amount"] ?>">
                </div>
                <div class="input-block">
                    <label for="description" class="input-label">Description</label>
                    <input type="text" name="update-description" id="description" value="<?= $data["detailProduct"]["description"] ?>">
                </div>
                <div class="modal-buttons">
                    <button class="input-button" type="submit" name="update-product">Update</button>
                    <button class="input-button" name="cancalUpdateProduct">Cancal</button>
                </div>
            </form>
        </div>
        <div class="modal-right">
            <img src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/img/backgroud-login.PNG" alt="">
        </div>
    </div>
</div>
<script src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/js/modal.js"></script>