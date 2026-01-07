<?php

// While e If

$arr = ["Hello", 2, 4.212, " ", true, false, "World", 1, false, "!", "<br>", 1209, 1092, 32, "Como", 21, " ", true, true, "está", "?"];


$x = sizeof($arr);
$y = 0;

while ($y < $x) {
    if (is_String($arr[$y])) {
        echo $arr[$y];
    }
    $y++;
}

// Eu não usei, mas no PHP também existe o break e o continue

?>