<!DOCTYPE html>
<?php session_start(); $ten = $_SESSION['userkeys']; ?>
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
        <form action="" method="post">
            <?php echo "Xin Chào $ten"; ?>
            <table>
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
                    $i++;
                }
                ?>
                <tr>
                    <td><input type="submit" value="Add item" name="add"></td>
                    <td><input type="submit" value="Remove Item" name="del"></td>
                </tr>
                <?php
                if(isset($_POST['add']))
                {
                    header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Item/Additem.php');
                }

                if(isset($_POST['del']))
                {
                    //echo "Tính năng đang hoàn thiện!";
                    header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Item/Removeitem.php');
                }
                ?>
            </table>
        </form>
        <!--<a href="Additem.php">Thêm Mới sản phẩm</a>-->
    </center>
</body>
</html>