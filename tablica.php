<?php
function printTable($array)
{
    echo '<table style="border: 1px solid black">';

    
    $isHeaderPrinted = false;
    
    foreach ($array as $item){
        if(!$isHeaderPrinted) {
            
            echo '<tr>';
            foreach ($item as $key => $cellData) {
                echo '<td style="border: 1px solid red">';
                echo "<span>$key</span>";
                echo '</td>';
            }
            echo '</tr>';
            
        }
        $isHeaderPrinted = true;
    }

    // print table rows
    foreach ($array as $item){
        echo '<tr>';
        foreach ($item as $cellData){

            echo '<td style="border: 1px solid black">';
            echo "<span>$cellData</span>";
            echo '</td>';

        }
        echo '</tr>';
    }

    echo '</table>';
}

$polaznici = file_get_contents('polaznici.json');

$polaznici = json_decode($polaznici);
printTable($polaznici);

$polaznici[] = [
    "ime" => "Filip",
    "prezime"=> "Novak",
    "godina"=> "24",
    "email"=> "f.n@gmail.com",
    "telefon"=> "013231232595259"
];

$polaznici = json_encode($polaznici);

file_put_contents(__DIR__ . '/polaznici.json', $polaznici);

$polaznici = file_get_contents('polaznici.json');

$polaznici = json_decode($polaznici);
printTable($polaznici);