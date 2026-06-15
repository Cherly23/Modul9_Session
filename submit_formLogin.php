<?php
session_start();

// Perbaikan: Format penulisan refresh setelah logout diperbaiki
if ((isset($_GET['aksi'])) and ($_GET['aksi'] == "logout")) {
    session_destroy();
    echo "<center><p>Logout berhasil! Anda akan dialihkan dalam 3 detik...</p></center>";
    header("refresh:3; url=proses_login.php");
    exit();
}

if (isset($_SESSION['login'])) {
    $nama = $_SESSION['username'];
    echo "<center>";
    echo "<p>Selamat Datang <b>". $nama."</b></p>";
    echo "<p> Berikut ini menu navigasi anda : </p>";
    echo "<p>
            <a href='menu1.php'> Menu 1&nbsp;</a>
            <a href='menu2.php'> Menu 2&nbsp;</a>
            <a href='menu3.php'> Menu 3&nbsp;</a> 
          </p>";
?>
    <p><a href="?aksi=logout">Logout</a></p>
    </center>
<?php
} else {
    header("location:proses_login.php");
    exit();
}
?>