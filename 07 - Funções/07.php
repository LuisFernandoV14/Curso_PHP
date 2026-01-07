<?php

function countVowels ($string) {

    $counter = 0;
    
    for ($i = 0; $i < mb_strlen($string); $i++) {
    
        if (isVowel($string[$i])){
            $counter += 1;
        }
    }
    
    return $counter;

}

function isVowel ($char) {
    if ($char = 'a' || $char = 'e' || $char = 'i' || $char = 'o' || $char = 'u') {
        return true;
    } else return false;
}
?>

