<?php
    session_start();
    if(!isset($_SESSION['id'])){
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
    <title>newpost</title>
</head>
<body>
    <h1>Webboard KakKak</h1>
    <hr>
    <?php
        echo "ผู้ใช้ : ".$_SESSION["username"]."<BR>";
    ?>
    <table>
    <tr><td>หมวดหมู่ :</td><td>
    <select name="list">
                <option value="grneral">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
    </select></td></tr>
    <tr><td>หัวข้อ :</td><td><input type="text" name="" size="40%" required></td></tr>
    <tr><td>เนื้อหา :</td><td><textarea name="message" rows="10%" cols="40%"></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
</body>
</html>
