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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="./product-add-back.php">
        <fieldset>

            <!-- Form Name -->
            <legend style="text-align: center;font-size:30px;">PRODUCTS</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                <div class="col-md-4">
                    <input id="product_name" name="txtName" placeholder="PRODUCT NAME" class="form-control input-md"
                        required="" type="text">

                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="category" class="form-control">
                        <?php
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id_category']; ?>">
                            <?php echo $row['name_category']; ?>
                        </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
                <div class="col-md-4">
                    <input id="available_quantity" name="txtNumber" placeholder="AVAILABLE QUANTITY"
                        class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="percentage_">PRICE</label>
                <div class="col-md-4">
                    <input id="percentage_" name="txtPrice" placeholder="PRICE" class="form-control input-md"
                        required="" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="percentage_discount">DISCOUNT PERCENT</label>
                <div class="col-md-4">
                    <input id="percentage_discount" name="txtSalePrice" placeholder="PERCENTAGE DISCOUNT"
                        class="form-control input-md" required="" type="text">

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="approuved_by">KEYWORD TO SEARCH </label>
                <div class="col-md-4">
                    <input id="approuved_by" name="txtKeyword" placeholder="KEYWORD FOR CUSTOMER CAN SEARCH"
                        class="form-control input-md" required="" type="text">
                </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="product_description" rows="5" name="txtDescript"></textarea>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="filebutton">IMAGE</label>
                <div class="col-md-4">
                    <input id="filebutton" name="img" class="input-file" type="file">
                </div>
            </div>
            <!-- File Button -->
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-3">
                    <button id="singlebutton" name="button" class="btn btn-primary">Save</button>
                </div>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Reset</button>
                </div>
            </div>

        </fieldset>
    </form>

</body>

</html>