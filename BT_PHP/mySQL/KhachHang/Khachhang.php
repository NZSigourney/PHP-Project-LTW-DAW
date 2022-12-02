<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StyleSheet/style.css">
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>STT</td>
                    <td>Mã Khách Hàng</td>
                    <td>Tên Khách Hàng</td>
                    <td>Số Điện Thoại</td>
                    <td>Địa Chỉ</td>
                    <td>Tài Khoản</td>
                </tr>
                <?php
                $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect failure!");
                $command = "select * from khachhang where SoDT is null";
                //$command_2 = "select * from khachhang where SoDT is not null";
                $sql_query = mysqli_query($sql_connect, $command) or die("Query Error!");
                $i = 1;
                while($data = mysqli_fetch_assoc($sql_query))
                {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['MaKH']; ?></td>
                        <td><?php echo $data['TenKH']; ?></td>
                        <td><?php echo $data['SoDT']; ?></td>
                        <td><?php echo $data['DiaChi']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </table>
        </form>
    </center> 
</body>
</html>