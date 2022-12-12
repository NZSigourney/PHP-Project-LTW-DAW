<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post" enctype="multipart/form-data">
            ĐĂNG KÝ TÀI KHOẢN
            <table>
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td><input type="text" name="account" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu:</td>
                    <td><input type="text" name="pwd" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Ghi chú:</td>
                    <td><input type="text" name="note"></td>
                </tr>
                <tr>
                    <td>Avatar</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Register" name="reg"></td>
                </tr>
            </table>            
        </form>

        <?php
        if(isset($_POST['reg'])){
            $users = $_POST['account'];
            $pwds = $_POST['pwd'];
            $note = $_POST['note'];
            $f = $_FILES['image'];
            //$path = "IMG/" . $_FILES['image']['name'];
            $hinhanh = "IMG/" . $f['name'];

            $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect Failled!");
            $command = "insert into `user` (`username`, `password`, `note`, `avatar`) values ('$users', '$pwds', '$note', '$hinhanh')";
            //$sql_query = mysqli_query($sql_connect, $command) or die("Query Error!");
            if(mysqli_query($sql_connect, $command)){
                echo "Đăng ký thành công";
                ?>
                <a href="Subcoding/username.php">Click Here</a>
                <?php
                move_uploaded_file($f['tmp_name'], $hinhanh);
            }else echo "Đăng ký thất bại!";
        }
        ?>
    </center>
</body>
</html>