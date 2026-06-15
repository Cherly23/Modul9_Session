<?php
session_start();
if ((isset($_GET['aksi'])) and ($_GET['aksi'] == "logout")) {
    session_destroy();
    header("refresh:3; url=Tugas1.php");
}
if (isset($_SESSION['login'])) {
    $nama = $_SESSION['login'];
    echo"<center>";
    echo "<h1> Ini Halaman Ketiga <b>". $nama."</b></h1>";
    echo "<p>Selamat Datang Menu 3 <b>". $nama."</b></p>";
    echo "<p> Berikut ini menu navigasi anda : </p>";
    echo "<p>
            <a href='menu1.php'> Menu 1&nbsp;</a>
            <a href='menu2.php'> Menu 2&nbsp;</a>
            <a href='menu3.php'> Menu 3&nbsp;</a> </p>";

?>
    <p><a href="?aksi=logout">Logout</a></p>
    </center>
<?php
} else{
    header("location:Tugas1.php");
}
?>