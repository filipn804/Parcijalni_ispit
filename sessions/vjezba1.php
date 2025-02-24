<?php

session_start();

$_SESSION['email'] = "f.novak@email.com";

echo "Email iz sesije: " . $_SESSION['email'] . "<br>";


$_SESSION = array();


session_destroy();

echo "Email nakon zatvaranja sesije: " . ($_SESSION['email'] ?? "Sesija je zatvorena, podatak ne postoji.");
?>