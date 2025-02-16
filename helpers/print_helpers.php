<?php
function printValue($value)
{
   echo "<pre>";
   echo$value;
   echo "</pre>";
}

function printWithNL($value)
{
    printValue($value);
    printNewLine();
}

function printNewLine()
{
    echo "<br>";
}

function returnPrintableValue($value)
{
    if(!is_bool($value)) {
        return $value;
    }

    if($value === true){
        return "Da";
    }

    return "Ne";
}

?> 