<?php
error_reporting(0);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contact-form-wrapper{width: 50%;margin: 0 auto;}
        .contact-form div{display: flex;}
        .form-laber{min-width: 15%;}
        .card{width: 500px;height: auto;}
        /* .card-content{display: flex;} */
        .imgAlbum{width:500px;;height:auto;background-position:center;background-size:cover;}
    </style>
</head>
<body>
  <!-- Show -->
  <div class="row">
    <?php
    $data = json_decode(file_get_contents("data.json"), true);
      foreach($data as $singer)
      {
        foreach($singer["listAlbum"] as $album)
        { ?>
          <div class="card">
            <div class="card-content">
              <img class="imgAlbum" src="<?php echo $album['imgAlbum']; ?>">
              <div class="idAlbum"> <?php echo $album['idAlbum']; ?> </div>
              <div class="nameAlbum"> <?php echo $album['nameAlbum']; ?> </div>
              <div class="priceAlbum"> <?php echo $album['priceAlbum']; ?> </div>
              <div class="descriptionAlbum"> <?php echo $album['descriptionAlbum']; ?> </div>
            </div>
          </div>
      <?php }
        }
        ?>
  </div>
<!-- Nhập -->
<!--  -->
<div class="contact-form-wrapper d-flex justify-content-center">
    <form action="#" class="contact-form"  method="post">
        <div>
            <label class="form-laber" for="idAlbum">idAlbum</label>
            <input type="text" class="form-control rounded border-white mb-3 form-input" id="idAlbum" placeholder="idAlbum" required name="idAlbum">
        </div>
        <div>
            <label class="form-laber" for="idAlbum">nameAlbum</label>
            <input type="text" class="form-control rounded border-white mb-3 form-input" id="nameAlbum" placeholder="nameAlbum" required name="nameAlbum">
        </div>
        <div>
            <label class="form-laber" for="idAlbum">imgAlbum</label>
            <input type="text" class="form-control rounded border-white mb-3 form-input" placeholder="imgAlbum" id="imgAlbum" required name="imgAlbum">
        </div>
        <div>
            <label class="form-laber" for="idAlbum">descriptionAlbum</label>
            <textarea id="descriptionAlbum" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="descriptionAlbum" required name="descriptionAlbum"></textarea>
        </div>
        <div>
            <label class="form-laber" for="idAlbum">priceAlbum</label>
            <input type="text" class="form-control rounded border-white mb-3 form-input" id="priceAlbum" placeholder="priceAlbum" required name="priceAlbum">
        </div>
        <div>
            <label class="form-laber" for="idAlbum">listSong</label>
            <input type="text" class="form-control rounded border-white mb-3 form-input" id="listSong" placeholder="listSong" required name="listSong">
        </div>
        <div class="submit-button-wrapper">
            <input type="submit"  name="Submit" value="Send">
        </div>
    </form>
</div>
</body>
</html>