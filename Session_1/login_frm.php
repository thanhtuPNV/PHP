<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loin form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="page">
        <h3>Login Form</h3>
        <form method="post" action="login_frm.php">
            <label>UserName:</label>
            <input name="user" type="text" id="user" />
            <label>Password:</label>
            <input name="passwd" type="password" id="pass" />
            <input type="submit" name="login" value="Login" id="1ogin" />
        </form>
    </div>
    <?php
    error_reporting(0);
    $user = $_POST['user'];
    $pw = $_POST['passwd'];
     session_start ();
    if (isset ($user) & isset ($pw)) {
        if ($user == "abc" & $pw == "123") {
            $_SESSION['login_user']=$user;
            echo "Chào mừng bạn: ".$_SESSION['login_user'];
        }
        // else{
        //     echo "Lỗi .... Hãy đăng nhập lại";}
        
   ?>
    <a href="logout_frm.php">Thoát - Logout</a>
    <?php
        } else {
            echo "Lỗi .... Hãy đăng nhập lại";
        } 
    ?>
</body>
</html>