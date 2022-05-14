<!-- <script src=”https://unpkg.com/babel-standalone@6/babel.min.js”></script>
<link rel="stylesheet" href=".././public/css/styleModal.css">
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Đăng Ký</h1>
      <form action="" method="Post">
        <div class="input-block">
          <label for="name" class="input-label">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="input-block">
          <label for="phonenumber" class="input-label">Phone Number</label>
          <input type="number" name="phonenumber" id="phonenumber">
        </div>
        <div class="input-block">
          <label for="address" class="input-label">Adderss</label>
          <input type="text" name="address" id="address">
        </div>
        <div class="input-block">
          <label for="emaillogin" class="input-label">Email</label>
          <input type="text" name="emaillogin" id="emaillogin">
        </div>
        <div class="input-block">
          <label for="passwordlogin" class="input-label">Password</label>
          <input type="password" name="passwordlogin" id="passwordlogin">
        </div>
        <div class="modal-buttons">
          <button class="input-button" name="login-2">Đăng Nhập</button>
          <button class="input-button" name="signup-2">Đăng Ký</button>
        </div>
      </form>
    </div>
    <div class="modal-right">
      <img src="https://camnang24h.net/wp-content/uploads/2021/06/hinh-nen-van-dong-vien-bong-ro-allen-iverson-1.jpg" alt="">
    </div>
  </div>
</div>
<script src=".././public/js/modal.js"></script> -->

<script src=”https://unpkg.com/babel-standalone@6/babel.min.js”></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/css/modalChaitan.css">
<div class="modal">
  <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/home"><i class="fa-solid fa-xmark"></i></a>
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Sign Up</h1>
      <form action="" method="Post">
        <div class="input-block">
          <label for="name" class="input-label">Name</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="input-block">
          <label for="phonenumber" class="input-label">Phone Number</label>
          <input type="number" name="phonenumber" id="phonenumber" required>
        </div>
        <div class="input-block">
          <label for="address" class="input-label">Adderss</label>
          <input type="text" name="address" id="address" required>
        </div>
        <div class="input-block">
          <label for="emaillogin" class="input-label">Email</label>
          <input type="text" name="emaillogin" id="emaillogin" required>
        </div>
        <div class="input-block">
          <label for="passwordlogin" class="input-label">Password</label>
          <input type="password" name="passwordlogin" id="passwordlogin" required>
        </div>
        <h5 id="error"><?= $data["error"] ?></h5>
        <div class="modal-buttons">
          <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/loginSignup/login" class="input-button">Log In</a>
          <button class="input-button" type="submit" name="signup-2">Sign Up</button>
        </div>
      </form>
    </div>
    <div class="modal-right">
      <img src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/img/backgroud-login.PNG" alt="">
    </div>
  </div>
</div>
<script src="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/public/js/modal.js"></script>