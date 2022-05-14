<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- customer js -->
    <script src='js/wow.js'></script>
    <script type="text/javascript" src="js/mylishop.js"></script>
    <!-- customer css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- button top -->
<a href="#" class="back-to-top"> <i class="fa fa-arrow-up"></i></a>
<!--- background--->
<div class="container-fluid">
    <div id="bg">
         <?php
            require_once("./Connect.php");
            $sql = "SELECT image FROM pro";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
               <img width="300px%" height="auto" src="<?php echo $row['image']; ?>" alt="">
         <?php } ?>
    </div>
</div><!---/background-->
<!-- Header -->
<?php include("model/header.php"); ?>
<!-- /header -->
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="pr-main">
                    <!-- sản phẩm mới -->
                    <div class="title-product-main">
                        <h3 class="section-title">Sản phẩm mới</h3>
                    </div>
                    <div class="content-product-main">
                    <div class="row">
                    <?php
                    $sql = "SELECT id_products, image,name, price FROM pro";
                    $result = mysqli_query ($conn,$sql);
                    while ($kq = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 col-sm-6 text-center">
                       <div class="thumbnail">
                            <div class="hoverimage1">
                                <img src= "<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="300px%" height="auto">
                            </div>
                            <div class="name-product">
                                <?php echo $kq['name']; ?>
                            <div class="price">
                                Giá: <?php echo $kq['price']; ?><sup> đK/sup>
                            </div>
                            <div class="product-info">
                                <a href="addcart.php?id=<?php echo $kq['id_products']; ?>">
                                      <button type="button" class="btn btn-primary">
                                          <label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>
                                     </button>
                                </a>
                                <a href="detail.php?id%=<?php echo $kq['id_products']; ?>">
                                     <button type="button" class="btn btn-primary">
                                          <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                     </button>
                                </a>
                            </div><!-- /product-info -->
                       </div><!-- /thumbnail -->
                  </div>
              <?php } ?>
    </div><!-- /row -->
                    </div><!-- /sản phẩm mới -->
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</body>
</html>