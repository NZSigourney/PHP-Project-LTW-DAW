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
        <table>
            <tr>
                <td>Nhập Files:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enter" name="btn"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['btn']))
    {
        $f = $_FILES['image'];
        if(move_uploaded_file($f['tmp_name'], $f['name'])){
            echo "Upload file thành công<br>";
            echo "Phiên bản tạm tên là " . $f['tmp_name'];
            echo "<br> Tên Files là " . $f['name'] . "<br>";
            echo "Hình ảnh: <br>";
            ?>
            <img src="<?php echo $f['name'] ?>" height="350" width="450"/>
            <?php
        }else{
            echo "Upload Files Thất bại";
        }
    }
    ?>
</body>
</html>