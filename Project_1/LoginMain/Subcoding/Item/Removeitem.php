<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table, tr, td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
    <center>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Mã số sản phẩm</td>
                    <td><input type="text" name="MSSP" placeholder="Mã số sản phẩm"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enter" name="btn"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['btn']))
        {
            $mssp = $_POST['MSSP'];

            $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect Failled!");
            $sql_command = "delete from sanpham where `MaSP` = '$mssp';";
            if(mysqli_query($sql_connect, $sql_command))
            {
                echo "Đã Xóa Column $mssp thành công!";
            }
        }
        ?>
    </center>
</body>
</html>