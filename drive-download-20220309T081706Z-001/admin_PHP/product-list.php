<!DOCTYPE html>
<html lang="en">
<?php
require_once("./connect.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
</head>

<body>
    <div class="containerr">
    <div class="_back-to-home"><a href="product-add.php"><button>Back to add</button></a></div>
        <h2>Products</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Id Product</div>
                <div class="col col-1">Name Product</div>
                <div class="col col-1">Image</div>
                <div class="col col-1">ID category</div>
                <div class="col col-1">price</div>
                <div class="col col-1">percent</div>
                <div class="col col-1">Key search</div>
                <div class="col col-1">Description</div>
                <div class="col col-1">Edit</div>
                <div class="col col-1">Delete</div>
            </li>
            <?php
            $sql = "SELECT * FROM pro";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li class="table-row" style="text-align:center;">
                <div class="col col-1"><?php echo $row['Id_products']; ?></div>
                <div class="col col-1"><?php echo $row['name']; ?></div>
                <div class="col col-1"><img style="width:100px;height:auto;" src="./img/<?php echo $row['image']; ?>" alt=""></div>
                <div class="col col-1"><?php echo $row['id_category']; ?></div>
                <div class="col col-1"><?php echo $row['price']; ?></div>
                <div class="col col-1"><?php echo $row['percent']; ?></div>
                <div class="col col-1"><?php echo $row['key_search']; ?></div>
                <div class="col col-1"><?php echo $row['description']; ?></div>
                <div class="col col-1"><a href="update.php?id=<?php echo $row['Id_products'];?>"><i class="fa-solid fa-pen-to-square"></i></a></div>
                <div class="col col-1"><a href="delete.php?id=<?php echo $row['Id_products'] ?>"><i class="fa-solid fa-trash"></i></a></div>
            </li>
            <?php
                }
            }
            ?>

        </ul>
    </div>
</body>

</html>