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
                    ?>"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu: </td>
                    <td><input type="text" name="pass" placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Register" name="reg">
                        <input type="submit" value="Login" name="btn">
                    </td>
                </tr>
            </table>            
        </form>
        
        <?php
        if(isset($_POST['btn']))
        {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $thongbao = "";
            //$_SESSION['userkeys'] = $username;
            $_SESSION['pwd'] = $password;

            // Connect MySQL
            $sql_connect = mysqli_connect("localhost", "root", "", "quanlysieuthi") or die("Connect Failled!");
            $command = "select * from user where username = '$username'";
            $sql_query = mysqli_query($sql_connect, $command) or die("Query Error!");
            $data = mysqli_fetch_assoc($sql_query);
            $dem = mysqli_num_rows($sql_query);
            $account = $data['username'];
            $pwd = $data['password'];
            if($dem <= 0){
                $thongbao = "Tài Khoản không tồn tại";
                echo $thongbao;
            }else{
                if($password != $pwd){
                    $thongbao = "<br>Sai Mật Khẩu! Đây có phải bạn không?<br>";
                    echo $thongbao . "<br>"?> <img src="<?php echo $data['avatar']; ?>" height="200" width="250"><?php
                }else{
                    $_SESSION['userkeys'] = $username;
                    $thongbao = "Đăng nhập thành công!";
                    echo "<br>" . $thongbao . " - " . "Xin hãy vào "?> <a href="http://localhost/BT_PHP/mySQL/session/Login/Subcoding/center.php">Trang Chủ<?php
                }
            }
        }

        if(isset($_POST['reg']))
        {
            //echo "Đang cập nhật, Vui lòng quay lại sau!";
            header('location:http://localhost/BT_PHP/mySQL/session/Login/register.php');
        }
        ?>
    </center>
</body>
</html>