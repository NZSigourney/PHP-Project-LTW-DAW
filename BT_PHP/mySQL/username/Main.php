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
        <table border="5">
            <tr>
                <td>STT</td>
                <td>Tài khoản</td>
                <td>Mật khẩu</td>
                <td>Ghi Chú</td>
                <!--<td>Avatar</td>-->
            </tr>
            <?php
            $sql = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Fail!");
            $s1 = "select * from user";
            $kq = mysqli_query($sql, $s1) or die("Lệnh truy vấn thất bại!");
            $i = 1;
            while($row = mysqli_fetch_assoc($kq))
            {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['note']; ?></td>
                    <!--<td><img src="<?php echo $row['HinhAnh']; ?>" height="50" width="100"></td>-->
                </tr>
                <?php
                //echo "$i: " .  $row['username'] . " -> " . $row['password'] . "<br>";
                $i++;
            }
            ?>
        </table>
    </form>
</body>
</html>