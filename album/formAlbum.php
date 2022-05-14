<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_form.css">
</head>
<body>
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">New content</h1>
    </div>
    <p class="border-bottom"></p>
    <div class="contact-form-wrapper">
        <form action="#" method="POST" class="contact-form">
            <div class="form-content">
                <label class="form-laber" for="imgAlbum">ImgAlbum</label>
                <input class="form-input" id="imgAlbum" name="imgAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="nameAlbum">NameAlbum</label>
                <input class="form-input" id="nameAlbum" name="nameAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="priceAlbum">PriceAlbum</label>
                <input class="form-input" id="priceAlbum" name="priceAlbum" type="text">
            </div>
            <div class="form-content">
                <label class="form-laber" for="descriptionAlbum">Description</label>
                <textarea class="form-input" id="descriptionAlbum" name="descriptionAlbum" type="text" rows="5" cols="30"></textarea>
            </div>
            <div class="submit-button-wrapper">
                <input class="form-submit" type="submit"  name="Submit" value="Send">
            </div>
        </form>
    </div>
    </div>
    <?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $components = parse_url($actual_link);
    parse_str($components['query'], $results);
    $indexSinger = intval($results["indexSinger"]);
    ?>
</body>
</html>