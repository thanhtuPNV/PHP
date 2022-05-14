<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_COOKIE["khach_hang"]))
    echo "Xin chào khách hàng <br><i>".$_COOKIE["khach_hang"]."</br></i><br/>";
    else
        echo "Xin chào quý khách!<br/>";
        echo "<a href='VD_cookie_1.php'>Quay về trang thông tin khách hàng!</a><br>";
    ?>
    <table>
        <tr class="center">
            <td height="177" colspan="2">
                <img src="https://img.websosanh.vn/v10/users/review/images/v6ykjnwu4a5xf/iphone-13-mau-hong.jpg?compress=85" alt="">
            </td>
        </tr>
        <tr>
            <td width="194" height="140">
                <p><img src="https://img.websosanh.vn/v10/users/review/images/v6ykjnwu4a5xf/iphone-13-mau-hong.jpg?compress=85" alt=""></p>
                <p>HOA ...VND</p>
            </td>
            <td width="196">
                <p><img src="https://img.websosanh.vn/v10/users/review/images/v6ykjnwu4a5xf/iphone-13-mau-hong.jpg?compress=85" alt=""></p>
                <p>HOA ...VND</p>
            </td>
        </tr>
    </table>
</body>
</html>