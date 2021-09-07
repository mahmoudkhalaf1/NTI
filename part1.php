<?php
$cars = array("a", "b", "z");


function changeChar($char)
{

    $nChar = ++$char;

    if (strlen($nChar) > 1) {
    $nChar = $nChar[0]; 
    
    echo $nChar;
    }

    changeChar('z');
}

?>