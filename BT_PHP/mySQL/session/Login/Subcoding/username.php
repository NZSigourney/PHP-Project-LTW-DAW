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
                <td>Tên Tài Khoản</td>
                <td>Mật Khẩu</td>
                <td>Ghi Chú</td>
                <td>Avatar</td>
            </tr>
            <?php
            $sql_connect = mysqli_connect("Localhost", "root", "", "Quanlysieuthi") or die("Connect Failure!");
            $command = "select * from user";
            $sql_query = mysqli_query($sql_connect, $command) or die("Excute Fail!");
            $i = 1;
            while ($data = mysqli_fetch_assoc($sql_query))
            {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['note']; ?></td>
                    <td><img src="<?php echo $data['avatar']; ?>" height="150" width="200"></td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        
    </form>
</body>
</html>