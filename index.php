<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        h1{
            font-size: 200%;text-align: center;
    }
    </style>
</head>
<body>
    <h1>Webboard KakKak</h1>
    <hr>
    หมวดหมู่:
        <select name="list">
            <option value="all"><pre>- ทั้งหมด -</pre></option>
            <option value="grneral">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
    <a href="login.html" style="float:right">เข้าสู่ระบบ</a>
    <br><br>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i." </a></li>";
            }
        ?>
    </ul>
</body>
</html>