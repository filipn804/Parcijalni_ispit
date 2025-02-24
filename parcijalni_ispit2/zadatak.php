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


$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["word"])) {
        $error = "Error: Field cannot be empty!";
    } else {
        $word = $_POST["word"];
        $broj_slova = strlen($word);
        $broj_samoglasnika = countVowels($word);
        $broj_suglasnika = countConsonants($word);
    
        $new_entry = [
            "rijec" => $word,
            "broj_slova" => $broj_slova,
            "broj_samoglasnika" => $broj_samoglasnika,
            "broj_suglasnika" => $broj_suglasnika
        ];
    
        $words = file_exists("words.json") ? json_decode(file_get_contents("words.json"), true) : [];
    
        if (!is_array($words)) {
            $words = [];
        }
    
        
        $words[] = $new_entry;
    
       
        file_put_contents("words.json", json_encode($words, JSON_PRETTY_PRINT));
    
        
        printTable($words);
    
        echo "<br>Data saved successfully: " . htmlspecialchars($word);
    }
    
}

 if (!empty($error)) echo "<p style='color:red;'>$error</p>"; 


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];
    
    if (!$word) {
        echo "Error: Please enter a word.";
    } else {
        $letterCount = strlen($word);
        echo "The word '$word' has $letterCount letters.";
    }
}

function countVowels($word) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

function countConsonants($word) {
    $vowels = ['b', 'c', 'č', 'ć', 'd', 'dž', 'đ', 'f', 'g', 'h', 'j', 'k', 'l', 'lj', 'm', 'n', 'nj', 'p', 'r', 's', 'š', 't', 'v', 'z', 'ž',
               'B', 'C', 'Č', 'Ć', 'D', 'DŽ', 'Đ', 'F', 'G', 'H', 'J', 'K', 'L', 'LJ', 'M', 'N', 'NJ', 'P', 'R', 'S', 'Š', 'T', 'V', 'Z', 'Ž'];
    $count = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (ctype_alpha($word[$i]) && !in_array($word[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
   
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <h1>Upišite riječ</h1>
    </head>
    <body>
    <form method="post" action="">
        <input type="text" name="word">
        <input type="submit" value="Pošalji">
    </form>
</html>