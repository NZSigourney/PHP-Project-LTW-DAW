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
                    <td>Mã Số Khách hàng</td>
                    <td><input type="text" name="maKH"></td>
                </tr>
                <tr>
                    <td>Tên Khách hàng</td>
                    <td><input type="text" name="TenKH"></td>
                </tr>
                <tr>
                    <td>Ngày Sinh</td>
                    <td><input type="text" name="ns"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><input type="text" name="sdt"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add Customer" name="reg"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['reg']))
        {
            $makh = $_POST['maKH'];
            $tenCus = $_POST['TenKH'];
            $ns = $_POST['ns'];
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];

            $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect Faillure!");
            $sql_command = "insert into khachhang values ('$makh', '$tenCus', '$ns', '$sdt', '$diachi', null)";
            if(mysqli_query($sql_connect, $sql_command)){
                echo "Đăng ký thành công";
                ?>
                <a href="listcustomer.php">Click Here</a>
                <?php
            }else echo "Đăng ký thất bại!";
        }
        ?>
    </center>    
</body>
</html>