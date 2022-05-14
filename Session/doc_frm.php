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
    <?php
    session_start();
    ?>
    <form id="forml" name="forml" method="post" action="">
        <table width="400" height="auto" border="0" align="center">
            <tr>
                <td height="35" colspan="2" align="center"><strong>Kết quả sau khi nhấn <em>Click here!</em>
            </tr>
            <tr>
                <td width="243" height="45"><img
                        src="http://thuthuatphanmem.vn/uploads/2018/09/11/hinh-anh-dep-1_044126531.jpg" width="356"
                        height="auto" /></td>
                <td width="157" align="center"><?php
                    echo "<p align='center'>Xin chào <b>" . $_SESSION['ho_ten'] . "</b><br>";
                    echo "Tên đăng nhập <b><i>" . $_SESSION['ten_dn'] . "</b></i><br>";
                    echo "<a href='./session_frm.php'> Quay về trang ĐĂNG NHẬP</a></p>";
                ?></td>
            </tr>
            <tr>
                <td colspan="2"><img
                        src="http://thuthuatphanmem.vn/uploads/2018/09/11/hinh-anh-dep-10_044127763.jpg"
                        width="577" height="auto" /></td>
            </tr>
        </table>
    </form>
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