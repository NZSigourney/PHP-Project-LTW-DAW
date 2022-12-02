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
                    <td><input type="submit" value="Login" name="btn"></td>
                </tr>
            </table>            
        </form>
        
        <?php
        if(isset($_POST['btn']))
        {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $annouce = "";
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
                $annouce = "Tài Khoản không tồn tại";
            }else{
                if($password != $pwd){
                    $annouce = "Sai Mật Khẩu!";
                    echo $annouce;
                }else{
                    $_SESSION['userkeys'] = $username;
                    $annouce = "Đăng nhập thành công!";
                    header('Location:http://localhost/BT_PHP/mySQL/session/Login/Homepage/center.php');
                    echo $annouce;
                }
            }

            /**if($username == $account and $password == $pwd)
            {
                echo "Đăng Nhập thành công!";
                header('Location:http://localhost/BT_PHP/mySQL/session/Login/Homepage/center.php');
            }elseif($password == null)
            {
                echo "mật khẩu trống, vui lòng nhập lại!";
            }elseif($username != $account)
            {
                echo "Tài khoản bị hoặc không tồn tại, Vui lòng nhập lại!";
            }elseif($password != $pwd){
                echo "Mật khẩu bị sai hoặc không tồn tại, Vui lòng nhập lại!";
            }*/
        }

        if(isset($_POST['reg']))
        {
            echo "Đang cập nhật, Vui lòng quay lại sau!";
            //header('location:http://localhost/BT_PHP/mySQL/session/Login/register.php');
        }
        ?>
    </center>
</body>
</html>