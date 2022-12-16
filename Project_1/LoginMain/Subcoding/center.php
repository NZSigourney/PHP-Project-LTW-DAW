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
    <!--<style>
        table, tr, td{
            text-align: center;
        }
    </style>-->
    <center>
        <?php 
        $tk = $_SESSION['userkeys'];
        echo "xin Chao $tk bấm vào nút bên trên để Tiến vào Danh sách.";
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Danh Sách sản phẩm:</td>
                    <td><input type="submit" value="List Sản Phẩm" name="items"></td>
                </tr>
                <tr>
                    <td>Danh Sách Thành viên:</td>
                    <td><input type="submit" value="List Thành Viên" name="member"></td>
                </tr>
                <tr>
                    <td>Danh Sách Khách hàng:</td>
                    <td><input type="submit" value="List Khách Hàng" name="Customer"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['items']))
        {
            header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Item/items.php');
        }

        if(isset($_POST['member']))
        {
            header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Username/username.php');
        }

        if(isset($_POST['Customer']))
        {
            header('location:http://localhost/BT_PHP/Project_1/LoginMain/Subcoding/Customer/listcustomer.php');
        }
        ?>
    </center>
</body>
</html>