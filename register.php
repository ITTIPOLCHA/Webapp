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
    <title>register</title>
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
    <h1 style="font-size: 200%;text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <center>
        <table id="block">
                <tr style="background-color: #6CD2FE;"><td colspan="2">กรอกข้อมูล</td></tr>
                <tr><td>ชื่อบัญชี : </td><td><input type="text" name="user" size="50" required></td></tr>
                <tr><td>รหัสผ่าน : </td><td><input type="password" name="pass" size="50" required></td></tr>
                <tr><td>ชื่อ-นามสกุล : </td><td><input type="text" name="name" size="50" required></td></tr>
                
                <tr><td></td><td><input type="radio" name="gender" value="m">ชาย<br></td></tr>
                <tr><td>เพศ :</td><td><input type="radio" name="gender" value="m">หญิง<br></td></tr>
                <tr><td></td><td><input type="radio" name="gender" value="m">อื่นๆ<br></td></tr>
                
                <tr><td>อีเมล : </td><td><input type="text" name="email" size="50" required></td></tr>
                <tr><th colspan="2"><input type="submit" value="สมัครสมาชิก"></th></tr>
        </table>
        <br>
        <a href="index.php">กลับไปเป็นหน้าหลัก</a>
        </center>
</body>
</html>