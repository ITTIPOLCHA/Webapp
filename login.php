<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style type="text/css">
        #block{
            border:2px solid black;
            padding: 1px;
            margin: 1px;
            width: 40%;
        }
    </style>
</head>
<body>
    <h1 style="font-size: 200%;text-align: center;">Webboard KakKak</h1>
    <hr>
    <form action="verify.php" method="post">
    <center>
    <table id="block">
            <tr style="background-color: #6CD2FE;"><td colspan="2">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type="text" name="user" size="50" required></td></tr>
            <tr><td>Password</td><td><input type="password" name="pass" size="50" required></td></tr>
            <tr><th colspan="2"><input type="submit" value="Login"></th></tr>
    </table>
    </form>
    ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php"><ins>กรุณาสมัครสมาชิก</ins></a>
    </center>
</body>
</html>