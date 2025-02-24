<?php

session_start();
$_SESSION['korisnik'] = 'korisnik1';

if(isset($_SESSION['korisnik'])){
    echo $_SESSION['korisnik'];
}

?>

<html>
    <head></head>
    <body>
        <a href="redirect.php">Klikni me</a>
    </body>
</html>