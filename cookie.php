<?php
$expire = time() +10;
setcookie("netter",1, $expire);
?>
<html>
    <head>
        <title>Cookie</title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE["netter"])) {
            echo "Selamat Datang Kembali";
        } else {
            echo "Selamat Datang, Ini kujungan anda peratama kalinya";
        } 
        ?>
    </body>