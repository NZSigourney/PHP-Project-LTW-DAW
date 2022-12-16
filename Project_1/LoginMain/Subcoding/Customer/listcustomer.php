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
            <table border="2">
                <tr>
                    <td>STT</td>
                    <td>MaKH</td>
                    <td>Tên Khách Hàng</td>
                    <td>Ngày Sinh</td>
                    <td>Địa Chỉ</td>
                    <td>Số Điện Thoại</td>
                </tr>
                <?php
                $sql_connect = mysqli_connect("Localhost", "root", "", "Quanlysieuthi") or die("Connect Failure!");
                $command = "select * from khachhang";
                $sql_query = mysqli_query($sql_connect, $command) or die("Excute Fail!");
                $i = 1;
                while ($data = mysqli_fetch_assoc($sql_query))
                {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['MaKH']; ?></td>
                        <td><?php echo $data['TenKH']; ?></td>
                        <td><?php echo $data['NgaySinh']; ?></td>
                        <td><?php echo $data['DiaChi']; ?></td>
                        <td><?php echo $data['SoDT']; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
                <td><input type="submit" value="Back to List Center" name="back-btn"></td>
                <td><input type="submit" value="Add More Customer" name="addcus-btn"></td>
                <?php
                if(isset($_POST['back-btn']))
                {
                    header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/center.php');
                }

                if(isset($_POST['addcus-btn']))
                {
                    header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Customer/addcustomer.php');
                }
                ?>
            </table>
            
        </form>
    </center>
</body>
</html>