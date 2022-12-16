<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" enctype="multipart/form-data">
        <table>
            <?php
            if(isset($_GET['user']))
            {
                $username = $_GET['user'];

                $sql_connect = mysqli_connect("Localhost", "root", "", "Quanlysieuthi") or die("Connect Failure!");
                $command = "select * from user where `username` = '$username'";
                $sql_query = mysqli_query($sql_connect, $command) or die("Excute Fail!");
                $sql_data = mysqli_fetch_assoc($sql_query);
            }
            ?>

            <tr>
                <td>Tên Đăng nhập</td>
                <td>
                    <input type="text" name="user" readonly="true" value="<?php if(isset($_POST['user'])){ echo $_POST['user'];}else echo $sql_data['username'];?>">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="text" name="pwd" value="<?php if(isset($_POST['pwd'])){ echo $_POST['pwd'];}else echo $sql_data['password'];?>">
                </td>
            </tr>
            <tr>
                <td>Ghi Chú</td>
                <td>
                    <input type="text" name="note" value="<?php if(isset($_POST['note'])){ echo $_POST['note'];}else echo $sql_data['note'];?>">
                </td>
            </tr>
            <tr>
                <td>Avatar Hiện Tại</td>
                <td><img src="<?php echo $sql_data['avatar']?>" height="150" width="200"></td>
            </tr>
            <tr>
                <td>Avatar Mới</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="upd"></td>
            </tr>
        </table>
    </form>
</body>
</html>