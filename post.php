<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align="center">Webboard KakKak</h1>
    <hr>
    <div align="center">
        <br>
        <?php
        if ($_GET["id"] %2 == 0) echo "ต้องการดูกระทู้หมายเลข" . $_GET["id"] ." <br> เป็นกระทู้หมายเลขคู่";
        else echo "ต้องการดูกระทู้หมายเลย". $_GET["id"] ." <br> เป็นกระทู้หมายเลขคี่";
        ?>
        <br>
        <table style="border:2px solid black;width:40%">
            <tr><td style="background-color:#6CD2FE;">เเสดงความคิดเห็น</td></tr>
            <tr><th><textarea name="message" rows="10%" cols="40%"></textarea></th></tr>
            <tr><th><input type="submit" value="ส่งข้อความ"></th></tr>
        </table>
        <br>
        <a href="index.php"><ins>กลับไปหน้าหลัก</ins></a>
    </div>
</body>
</html>