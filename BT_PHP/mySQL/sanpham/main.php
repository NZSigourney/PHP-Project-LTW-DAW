<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="2">
            <tr>
                <td>STT</td>
                <td>Mã số sản phẩm</td>
                <td>Tên Sản phẩm</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Hình Ảnh</td>
            </tr>
            <?php
            $sql = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Kết nối thất bại!");
            $sanpham = "select * from sanpham";
            $query = mysqli_query($sql, $sanpham) or die("Failled to excute!");
            $i = 1;
            while ($data = mysqli_fetch_assoc($query))
            {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['MaSP']; ?></td>
                    <td><?php echo $data['TenSP']; ?></td>
                    <td><?php echo $data['soluong'] . " " . $data['DVT']; ?></td>
                    <td><?php echo $data['Gia'] . " VNĐ"; ?></td>
                    <td><img src="<?php echo $data['HinhAnh']; ?>" height="150" width="200"></td>
                </tr>
                <?php
                //echo "<br>$i. " . $data['TenSP'] . " - " . "Số Lượng: " . $data['soluong'] . " - " . "Giá: " . $data['Gia'] . " " . $data['DVT'];
                $i++;
            }
            ?>
        </table>
    </form>
</body>
</html>