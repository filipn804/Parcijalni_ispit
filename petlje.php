<?php

function isBetween($a, $b, $c) {
   
    $min = min($a, $c);
    $max = max($a, $c);
    
    return ($b >= $min && $b <= $max);
}

$a = 15;
$b = 10;
$c = 5;

if (isBetween($a, $b, $c)) {
    echo "$b je između $a i $c";
} else {
    echo "$b nije između $a i $c";
}

?>

<?php
$dan = date("N"); 

switch ($dan) {
    case 1:
        echo "Danas je Ponedjeljak.";
        break;
    case 2:
        echo "Danas je Utorak.";
        break;
    case 3:
        echo "Danas je Srijeda.";
        break;
    case 4:
        echo "Danas je Četvrtak.";
        break;
    case 5:
        echo "Danas je Petak.";
        break;
    case 6:
        echo "Danas je Subota.";
        break;
    case 7:
        echo "Danas je Nedjelja.";
        break;
    default:
        echo "Greška pri dohvaćanju dana.";
}
?>

<?php

$i = 1;

while ($i <= 10) {
    echo $i . "";
    $i++;
}

?>


<?php
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . "<br>";
}
?>


<?php
$names = [
    "first" => "Ana",
    "second" => "Ivan",
    "third" => "Petar",
    "fourth" => "Marija",
    "fifth" => "Luka"
];

foreach ($names as $key => $value) {
    echo "Ključ: $key, Vrijednost: $value <br>";
}
?>