<?php session_start();
//if(isset($_SESSION['userskey']) and $_SESSION['userskey'] != null)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php 
        $tk = $_SESSION['userkeys'];
        echo "xin Chao $tk bấm vào nút bên trên để Tiến vào Danh sách Sản Phẩm;";
        ?>
        <form action="" method="post">
            <input type="submit" value="List Sản Phẩm" name="list">
        </form>
        <?php
        if(isset($_POST['list']))
        {
            header('location:http://localhost/BT_PHP/mySQL/sanpham/main.php');
        }
        ?>
    </center>
</body>
</html>