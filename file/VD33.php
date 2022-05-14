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
</head>
<body>
    <form id="form1" name="form1" method="post" action="tao_ghi_file.php">
        <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#DB95B8">
            <tr bgcolor="#BDBAE7">
                <td colspan="2" bgcolor="#CC3366"> <div align="center"Xspan class="stylel">TẠO - GHI - ĐỌC FILE CÓ ĐỊNH DẠNG</span></div></td>
            </tr>
            <tr>
                <td><span class="style6">&nbsp;Tên file: </span></td>
                <td><input name="ten file" type="text" id="ten file" size="35" value="my_setting.txt"/></td>
            </tr>
            <tr>
                <td width="103"><span class="style6">&nbsp;Đơn giá </span><//td>
                <td width="233"><label>
                <input name="dg" type="text" id="dg" value="<?php echo $_POST["dg"];?>" size="15" />
                </label></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="Submit" value="Ghi và đọc file" /> </td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST["ten_file"]))
    {
        $ten_file = $_POST["ten_file"];
        $ten_hang=$_P0ST["ten_hang"];
        $sl=$_POST["sl"];
        $dg= $_POST["dg"];
        $thanh_tien = $sl*$dg;
        //bl: ghi file
            $file = fopen ("$ten_file","a",1);
            $san_pham = $ten_hang. "\t".$sl."\t".$dg. "\t".$thanh_tien."\n";
            fwrite($file,$san_pham);
            fclose ($file);
            echo "<p align='center' class='style6'> Tạo và ghi file thành công!</p>";
       //b2: xuat file vua ghi ra màn hình
            $file = fopen ("$ten_file","r");
            echo "<table width='350' border='0' align='center' cellpadding='2' cellspacing='2' bgcolor='#DB95B8' class='style6'>";
            echo "<tr><td";
            echo "<p align = 'center'><B>Nội đung của file: </B><br></p>";
            echo "<table border='1' width='100%'>";
            echo "<tr>";
            echo "<td>Tên hàng</td";
            echo "<td>sồ lượng</td";
            echo "<td>Đon giác/td>";
            echo "<td Thành tiến</td";
            echo "</tr>";
            while (!feof ($file))
            {
                echo "<tr>";
                $noi_dung = fgets ($file,1000);
                $mang= explode ("\t",$noi_dung);
                echo "<td>$mang[0]</td";
                echo "<td>$mang[1]</td>";
                echo "<td>$mang[2]</td>";
                echo "<td>$mang[3]</td";
                echo "</tr>";
            }
            echo "</table>";
            echo "<p align='center' class='sryle6'><b>Đọc file thành công!</b></p>";
            echo "</p>";
            fclose ($file);
            echo "</tr></td>";
            }
            else
                echo "<p align 'center'>Hãy nhập tên file!</p>";
        ?>
</body>
</html>