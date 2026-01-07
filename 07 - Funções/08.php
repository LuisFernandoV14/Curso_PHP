<?php

function isPrime($integer) {
    if ($integer <= 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($integer); $i++) {
        if ($integer % $i == 0) {
            return false;
        }
    }

    return true;
}

?>