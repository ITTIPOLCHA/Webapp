<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align="center">Webboard KakKak</h1>
    <hr>
    <div align="center">
        <?php
            if($_POST["user"]=="admin" && $_POST["pass"]=="ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
            }
            elseif($_POST["user"]=="member" && $_POST["pass"]=="mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>
        <br>
        <a href="index.php"><ins>กลับไปหน้าหลัก</ins></a>
    </div>
</body>
</html>