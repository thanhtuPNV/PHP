<script src=”https://unpkg.com/babel-standalone@6/babel.min.js”></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/css/modalChaitan.css">
<div class="modal">
    <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin"><i class="fa-solid fa-xmark"></i></a>
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Add Product</h1>
            <form action="" method="Post">
                <div class="input-block">
                    <label for="name" class="input-label">Name</label>
                    <input type="text" name="name-product" id="name-product">
                </div>
                <div class="input-block">
                    <label for="img" class="input-label">Img</label>
                    <input type="file" name="img" id="img">
                </div>
                <div class="input-block">
                    <label for="price" class="input-label">Price</label>
                    <input type="number" name="price" id="price">
                </div>
                <div class="input-block">
                    <label for="amount" class="input-label">Amount</label>
                    <input type="number" name="amount" id="amount">
                </div>
                <div class="input-block">
                    <label for="description" class="input-label">Description</label>
                    <input type="text" name="description" id="description">
                </div>
                <div class="modal-buttons">
                    <button class="input-button" type="submit" name="add-product">Add</button>
                    <button class="input-button" name="cancalAddProduct">Cancal</button>
                </div>
            </form>
        </div>
        <div class="modal-right">
            <img src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/img/backgroud-login.PNG" alt="">
        </div>
    </div>
</div>
<script src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/js/modal.js"></script>