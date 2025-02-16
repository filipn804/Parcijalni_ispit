<?php

$brojevi = [];


for ($i = 0; $i < 10; $i++) {
    $brojevi[] = rand(1, 100);
}


$json_data = json_encode($brojevi, JSON_PRETTY_PRINT);


file_put_contents('brojevi.json', $json_data);

echo "Brojevi su uspešno sačuvani u brojevi.json\n";


$brojevi_iz_datoteke = json_decode(file_get_contents('brojevi.json'), true);


$zbroj = array_sum($brojevi_iz_datoteke);

$prosjek = $zbroj / count($brojevi_iz_datoteke);


$najveci = max($brojevi_iz_datoteke);
$najmanji = min($brojevi_iz_datoteke);

echo "Zbroj svih brojeva: $zbroj\n";
echo "Prosječna vrijednost: $prosjek\n";
echo "Najveći broj: $najveci\n";
echo "Najmanji broj: $najmanji\n";

?>