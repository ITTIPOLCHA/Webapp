<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calendar.php" method="get">
        กรุณากรอกเดือน :
        <input type="text" name="เดือน">
        <br>
        กรุณากรอกปี(พ.ศ.) :
        <input type="text" name="ปี">
        <br>
        วันที่ 1 ของเดือนตรงกับวัน
        <select name="day">
            <option value="วันจันทร์">วันจันทร์</option>
            <option value="วันอังคาร">วันอังคาร</option>
            <option value="วันพุธ">วันพุธ</option>
            <option value="วันพฤหัสบดี">วันพฤหัสบดี</option>
            <option value="วันศุกร์">วันศุกร์</option>
            <option value="วันเสาร์">วันเสาร์</option>
            <option value="วันอาทิตย์">วันอาทิตย์</option>
        </select>
        <br>
        <a href="calendar.php"><input type="submit" value="ตกลง"></a>
        <input type="submit" value="ล้างข้อมูล">
    </form>
</body>
</html>