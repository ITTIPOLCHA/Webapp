<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <?php
        session_start();
    ?>
</head>
<body>
    <?php
        if($_SESSION["role"]!="a"){
            header("location:index.php");
            die();
        }
        else{
            echo "ลบกระทู้ หมายเลข $_GET[id]";
        }
    ?>
</body>
</html>