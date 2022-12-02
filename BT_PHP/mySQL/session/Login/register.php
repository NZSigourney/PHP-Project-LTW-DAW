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
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><input type="text" name="user" placeholder="Username" value="<?php
                    if (isset($_POST['user'])) echo $_POST['user'];
                    ?>" required></td>
                </tr>
                <tr>
                    <td>Mật Khẩu: </td>
                    <td><input type="text" name="pass" placeholder="Password" value="<?php
                    if (isset($_POST['pass'])) echo $_POST['pass'];
                    ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Register" name="reg"></td>
                </tr>
            </table>            
        </form>

        <?php
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // SQL Connect
        $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi");
        $command = "insert into `user` (`username`, `password`, `note`, `avatar`) values ('$username', '$password', null, null";
        $sql_query = mysqli_query($sql_connect, $command);
        echo "Register completed";
        ?>
    </center>
</body>
</html>