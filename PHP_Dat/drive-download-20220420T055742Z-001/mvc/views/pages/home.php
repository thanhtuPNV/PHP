<link rel="stylesheet" href="./public/css/style.css">
<link rel="stylesheet" href="./public/css/styles.css">

<section class="pledges">
    <div class="pledge">
        <div class="h5">
            <h5>LỜI CAM KẾT </h5>
            <h5>CỦA OTAKUVN</h5>
        </div>
    </div>
    <div class="pledge">
        <i class=" fas fa-user-shield font"></i>
        <p>Bảo Hành Tối Thiểu 3 Năm</p>
    </div>
    <div class="pledge">
        <i class="fas fa-piggy-bank font"></i>
        <p>Tiết Kiệm Tối Đa</p>
    </div>
    <div class="pledge">
        <i class="fas fa-dolly-flatbed font"></i>
        <p>Miễn Phí Vận Chuyển Cho Đơn Trên 999k(Giảm Tối Đa 100K)</p>
    </div>
    <div class="pledge">
        <i class="fas fa-undo-alt font"></i>
        <p>Hoàn Trả Trong Vòng 30 Ngày</p>
    </div>
</section>
<section class="famous_products ">
    <h1 class="famous ">CÁC SẢN PHẨM NỔI BẬT</h1>
    <div class="products_menu ">
        <div class="products ">
            <a href="clothes.html">
                <img src="public/img/áo quần th2.PNG " alt="Products ">
                <h1 class="name_famous_products ">Áo Quần Thể Thao</h1>
                <h3 class="discover ">Khám Phá Ngay<i class="fas fa-angle-right "></i></h3>
            </a>
        </div>
        <div class="products ">
            <a href="balls.html">
                <img src="public/img/bóng th1.jpg " alt="Products ">
                <h1 class="name_famous_products ">Bóng Thể Thao</h1>
                <h3 class="discover ">Khám Phá Ngay<i class="fas fa-angle-right "></i></h3>
            </a>
        </div>
        <div class="products ">
            <a href="bags.html">
                <img src="public/Img/balo th.jpg " alt="Products ">
                <h1 class="name_famous_products ">Balo Thể Thao</h1>
                <h3 class="discover ">Khám Phá Ngay<i class="fas fa-angle-right "></i></h3>
            </a>
        </div>
        <div class="products ">
            <a href="shoes.html">
                <img src="public/Img/giày th3.jpg " alt="Products ">
                <h1 class="name_famous_products ">Giày Thể Thao</h1>
                <h3 class="discover ">Khám Phá Ngay<i class="fas fa-angle-right "></i></h3>
            </a>
        </div>
    </div>
</section>
<div class="content-show">
    <h1 class="famous " style="margin-left: 40%;margin-bottom: 2% ;">CÁC SẢN PHẨM HIỆN CÓ</h1>
    <div class="container">
        <div class="row">
            <?php
            if (is_null($data["productList"])) {
                echo "<h3>Sorry, No product to show!</h3>";
            } else
                foreach ($data["productList"] as $product) { ?>
                <div class="col-6">
                    <div class="cart">
                        <img id="cart-img" style="width:100%;" src="public/img/<?php echo $product['img'] ?>">
                        <h1 id="name"><?php echo $product['nameProduct'] ?></h1>
                        <h3 id="price">Giá: <?php echo $product['price'] ?> VND</h3>
                        <div class="cart-btn">
                            <a href="cart.php?id=<?php echo $product['id'] ?>"><button type="button" class="btn btn-primary">Mua Hàng</button></a>
                            <br>
                            <a href="home/detailProduct.php?id=<?php echo $product['id']; ?>"><button type="button" class="btn btn-danger">Chi Tiết</button></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<section class="discover_mores">
    <h1>KHÁM PHÁP THÊM</h1>
    <div class="discover_more">
        <div id="more1">
            <div class="img1">
                <img src="public/Img/chuyên nghiệp.jpg " alt="Photo ">
                <h1 id="professional">CHUYÊN NGHIỆP</h1>
            </div>
            <div class="img1">
                <img src="public/Img/giàu nhiệt huyết.png " alt="Photo ">
                <h1>NHIỆT HUYẾT</h1>
            </div>
        </div>
        <div id="more2">
            <div class="img2">
                <img src="public/Img/thân thiện với môi trường.jpg " alt="Photo ">
                <h1 id="environment">THÂN THIỆN MÔI TRƯỜNG</h1>
            </div>
            <div class="img2">
                <img src="public/Img/đối tác.jpg " alt="Photo ">
                <h1 id="partner"> ĐỐI TÁC TỐT</h1>
            </div>
            <div class="img2">
                <img src="public/Img/giao hàng nhanh chóng.jpg " alt="Photo ">
                <h1>GIAO HÀNG THẦN TỐC</h1>
            </div>
        </div>
    </div>
</section>