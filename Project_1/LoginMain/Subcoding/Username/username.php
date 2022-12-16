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
    <form action="" method="post">
        <table>
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
                    <td><img src="<?php echo $data['avatar'];?>" height="150" width="200"></td>
                    <td><a href="chitietkh.php?user=<?php echo $data['username']?>">Xem Chi Tiết</a></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            <td><input type="submit" value="Back to List Center" name="back-btn"></td>
            <?php
            if(isset($_POST['back-btn']))
            {
                header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/center.php');
            }
            ?>
        </table>
        
    </form>
</body>
</html>