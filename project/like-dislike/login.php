<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    if($username === 'TT' || $username == 'TU'){
        echo "<script>alert('Login success')</script>";
        $_SESSION["username"] = $username;
        echo "<script>location.replace('index.php')</script>";
    }else{
        echo "<script>alert('Invalid Username')</script>";
        echo "<script>location.replace('login.php')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like and Dislike</title>
</head>
<body>
    <div>
        <p>Login Form</p>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Enter username......">
            <br>
            <button name="login">Login</button>
        </form>
    </div>
</body>
</html>