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
                    <td>Tên Sản Phẩm</td>
                    <td><input type="text" name="TSP" placeholder="Tên sản phẩm"></td>
                </tr>
                <tr>
                    <td>Giá sản phẩm</td>
                    <td><input type="text" name="GSP" placeholder="Giá sản phẩm"></td>
                </tr>
                <tr>
                    <td>Đơn Vị Tính</td>
                    <td><input type="text" name="DVT" placeholder="Đơn vị tính"></td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td><input type="text" name="SLSP" placeholder="Số Lượng sản phẩm"></td>
                </tr>
                <tr>
                    <td>Mô Tả</td>
                    <td><input type="text" name="mota" placeholder="Mô Tả"></td>
                </tr>
                <tr>
                    <td>Hình Ảnh Sản phẩm</td>
                    <td><input type="file" name="image"></td>
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
            $maso = $_POST['MSSP'];
            $tensanpham = $_POST['TSP'];
            $price = $_POST['GSP'];
            $dvt = $_POST['DVT'];
            $soluong = $_POST['SLSP'];
            $mota = $_POST['mota'];

            $image = $_FILES['image'];
            $url_image = "IMG/" . $image['name'];

            $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect Failled!");
            $sql_command = "insert into sanpham (`MaSP`, `TenSP`, `Gia`, `DVT`, `soluong`, `MoTa`, `HinhAnh`) values ('$maso', '$tensanpham', '$price', '$dvt', '$soluong', '$mota', '$url_image')";
            //$sql_query = mysqli_query($sql_connect, $sql_command);
            if(mysqli_query($sql_connect, $sql_command))
            {
                move_uploaded_file($image['tmp_name'], $url_image);
                echo "Thêm Sản phẩm thành công! Bấm vào";
                ?> <a href="items.php">đây</a> <?php echo " để kiểm tra!";
            }
        }
        ?>
    </center>
</body>
</html>