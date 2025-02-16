<?php
function vratiTekst() {
    return "Ovo je povratni tekst iz funkcije.";
}

$rezultat = vratiTekst();
echo $rezultat;
?>


<?php

function sum($a, $b) {
   return $a + $b;
}

$sum = sum(4, 5);

echo $sum;

?>

<?php
function spojiImePrezime($name, $surname) {
    $punoIme = $name . " " . $surname; 
    return strtoupper($punoIme);
}

$rezultat = spojiImePrezime("Marko", "Petrovic"); 
echo $rezultat; 
?>

<?php
function brojac() {
    static $zbroj = 0; 
    return function ($number) use (&$zbroj) {
        $zbroj += $number; 
        return $zbroj; 
    };
}

$funkcija = brojac(); 


for ($i = 0; $i < 5; $i++) {
    $randomBroj = rand(1, 10); 
    $rezultat = $funkcija($randomBroj); 
    echo "Dodano: $randomBroj, Ukupno: $rezultat\n";
}
?>
