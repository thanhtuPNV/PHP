<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <?php
            session_start ();
            error_reporting(0);
            echo $_SESSION['login_user']."<br/>";
            session_destroy();
            echo "Bạn đã thoát";
        ?>
    </body>

</html>