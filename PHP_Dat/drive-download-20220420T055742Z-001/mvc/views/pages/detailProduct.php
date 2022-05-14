<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<div class="container">
    <div style="margin-top: 5%;">
        <div class="row">
            <div class="col-6">
                <div class="pr-left">
                    <img width="300px" height="300px" src="../../public/img/<?php echo $data["detailProduct"]["img"] ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="pr-right">
                    <h1><?php echo $data["detailProduct"]["nameProduct"] ?></h1>
                    <br>
                    <h5>Price: <?php echo $data["detailProduct"]["price"] ?> $</h5>
                    <br>
                    <h5>Amount: <?php echo $data["detailProduct"]["amount"] ?> Products</h5>
                    <br>
                    <h5>Description: <br> <?php echo $data["detailProduct"]["description"] ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>