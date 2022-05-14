<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="./form.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Img</label>
                <input type="text" class="form-control" name="img" id="img" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">contry</label>
                <input type="text" class="form-control" name="contry" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">resort</label>
                <input type="text" class="form-control" name="resort" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">price</label>
                <input type="text" class="form-control" name="price" aria-describedby="emailHelp">
            </div>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
    </div>
    <?php
    if (isset($_POST["img"]) && isset($_POST["title"]) && isset($_POST["contry"]) && isset($_POST["resort"]) && isset($_POST["price"])) {
        $img = $_POST["img"];
        $title = $_POST["title"];
        $country = $_POST["contry"];
        $resort = $_POST["resort"];
        $price = $_POST["price"];
        $file = fopen("North.csv", "a") or die("You can not open this file !!");
        $line = array($img, $title, $country, $resort, $price);
        fputcsv($file, $line);
        fclose($file);
    } else {
        echo "input full textbox";
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>