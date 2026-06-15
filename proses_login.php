<?php
session_start();
if(isset($_POST['Login'])) {
    if(($_POST['nama']=="") and ($_POST['pass'] == "")) {
        echo "Username dan Password masih kosong"; session_destroy();
    }else{
        // user = naufal & password = "chocolatos3"
        if($_POST['nama'] =="cherly" and $_POST['pass'] == "12345") {
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $_POST['nama'];
        } 
        if ((isset($_SESSION['login']) and $_SESSION['login'] == 1)) {
            header("location:submit_formLogin.php");
            exit();
        }
        
    }
    
}

?> 

<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <form name="session" method="POST" action=""> <p>Form Login</p>
            <p> Username : <input type="text" name="nama"></p>
            <p> Password : <input type="password" name="pass"></p>
            <input type="submit" name="Login" value="Login">
        </form>
    </body>
</html>