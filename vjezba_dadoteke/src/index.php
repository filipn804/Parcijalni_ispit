<?php

include '../../helpers/print_helpers.php';

$file = file_get_contents('../files/igre.json');

 //var_dump($file);

$decodedFile = json_decode($file);

print_r($decodedFile);

foreach ($games as $game) {
   echo '<br><br>';
   $gameArray = (array)$game;
   foreach ($gameArray as $label) {
    if(is_bool($info === true)) {
        $info = "DA";
    }else {
        $info = "NE";
    }
    printNewLine();
   }
}

$games[] = [
    "title"=> "Final Fantacy XIV",
        "genre"=> "MMORPG",
        "studio"=> "Square Enix",
        "year_published"=> 2010,
        "available"=> true,
        "favourite"=> false
];

$encodedData = json_encode($games);

var_dump($encodedData);



?>