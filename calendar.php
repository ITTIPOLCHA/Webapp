<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    
?>
<body>

    <?php
        echo $_GET['เดือน'] . $_GET['ปี'] . $_GET['day'];
        if($_GET["เดือน"] == "กุมภาพันธ์"){
            if( ($_GET["ปี"] - 2563) % 4 == 0 ){

            }
        }
        elseif($_GET["เดือน"] == "เมษายน" || "มิถุนายน" || "กันยายน" || "พฤษจิกายน"){
            
        }
        else{
        }
    ?>
</body>
</html>