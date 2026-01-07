<?php

function elevar($base, $expoente) {
    return $base ** $expoente;
}

echo elevar(2, 3); // 8
echo "<br>";
echo elevar(5, 2); // 25
echo "<br>";
echo elevar(10, 0); // 1
echo "<br>";

?>