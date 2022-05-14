<?php
session_start();
error_reporting(0);
$flag = 0;
if (!empty ($_POST ["ho_ten"]) && !empty ($_POST ["email"]) && !empty ($_POST ["ten_dn"]) && !empty ($_POST ["mat_khau"]))
     $_SESSION['ho_ten'] = $_POST["ho_ten"];
     $_SESSION['email'] = $_POST["email"];
     $_SESSION['ten_dn'] = $_POST["ten_dn"];
     $_SESSION['mat_khau'] = $_POST["mat_khau"];
$flag = 1;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table width="338" height="205" border="0" align="center" cellpadding="0" cellpacing="0">
            <tr>
                <td height="32" colspan="2" align="center" valign="middle" bgcolor="#006666"><h3><strong>THÔNG TIN ĐĂNG NHẬP</strong></
            </tr>
            <tr bgcolor="#009FAA">
                <td width="130" height="35"> <strong> Họ và tên:</strong></td>
                <td width="208"> <input name="ho_ten" type="text" id="textfield9" value="<?php echo $_POST["ho_ten"];?>" /></td>
            </tr>
            <tr bgcolor="#009FAA">
                <td height="37"><strong> Email:</strong></td>
                <td><input name="email" type="text" id="textfield10" value="<?php echo $_POST["email"];?>" /></td>
            </tr>
            <tr bgcolor="#009FAA">
                <td height="33"><strong> Tên đăng nhập:</strong></td>
                <td> <input name="ten_dn" type="text" id="textfieldl1" value="<?php echo $_POST["ten_dn"];?>" /></td>
            </tr>
            <tr bgcolor="#009FAA">
                <td height="34"><strong> Mật khẩu:</strong></td>
                <td> <input name="mat_khau" type="password" id="textfield12" value="<?php echo $_POST["mat_khau"];?>" /></td>
            </tr>
            <tr bgcolor="#009FAA">
                <td height="34" colspan="2" align="center"><input type="submit" name="button" id="button" value="Đăng nhập" /></td>
            </tr>
        </table>
    </form>
    <!--  -->
    <p align="center"><font color="#FF0000"></font></p>
    <form id="form2" name="form2" method="post" action="">
    <?php
        if($flag==1)
            {
                echo "<table width='350' border='0' align='center' cellpadding='0' cellspacing
                <tr bgcolor='#009FAA' align='center'><td>";
                echo "<font color='#ffffff'>Xin chào: ". $_SESSION['ho_ten']."<br>";
                echo "Email: ".$_SESSION['email']. "<br>";
                echo "Tên đăng nhập: <b><i> ".$_SESSION['ten_dn']. "</b></i><br>";
                echo "Mật khẩu: ".$_SESSION[ 'mat_khau']. "<br>";
                echo "<a href='doc_frm.php'>click here!</a>";
                echo "</td></tr></table>";
            }
    ?>
    </form>
</body>
</html>