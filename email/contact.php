<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="">
    <title>Contact</title>
    <style>
        body{
            background:  #fdf1ec;
        }
    </style>
</head>
<body>

<div class="login-page">
    <h1>Contact US</h1>
  <div class="form">
    <form action="send.php" method="post" class="contact" >
    <input class="form-input" type="text" name="name" value="" placeholder="Name *">
    <input class="form-input" type="text" name="email" value="" placeholder="Email *"> 
    <input class="form-input" type="text" name="mess" value= "" placeholder="Write somegthing ..."> 
      <button type="submit" name="send" >Done</button>
    </form>
  </div>
</div>

</body>
</html>