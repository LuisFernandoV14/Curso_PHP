<?php

    // A função 'date()' recebe uma String de parâmetro, o formato da data:

        $d1 = date("d/m/y"); 
        $d2 = date("y/m/d");
        $d3 = date("d/m (y)");
        $d4 = date("d/m");

        foreach([$d1, $d2, $d3, $d4] as $datas) {
            echo "Data: {$datas}<br>";
        }

    // A data que será impressa é a data atual, em dois dígitos (2026 aparece como '26')
    // Letras diferentes imprimem a data de maneiras diferentes: 

        $d5 = date("F j, Y, g:i a") . "\n";                 // Mês em extenso, dia (2 digitos), ano (4 digitos), horário
        $d6 = date("m.d.y") . "\n";                         // mes, dia e ano (2 digitos todos)
        $d7 = date("j, n, Y") . "\n";                       // dia (2 digitos), mes (1 digito), ano (4 digitos)
        $d8 = date("Ymd") . "\n";                           // ano (4 digitos), mes e dia (2 digitos) tudo junto, sem separar
        $d9 = date('h-i-s, j-m-y, it is w Day') . "\n";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
        $d10 = date('\i\t \i\s \t\h\e jS \d\a\y.') . "\n";   // "it is the <dia>th day".
        $d11 = date("D M j G:i:s T Y") . "\n";               // Sat Mar 10 17:16:18 MST 2001
        $d12 = date('H:m:s \m \i\s\ \m\o\n\t\h') . "\n";     // 17:03:18 m is month
        $d13 = date("H:i:s") . "\n";                         // 17:16:18
        $d14 = date("Y-m-d H:i:s") . "\n";                   // 2001-03-10 17:16:18 (o formato DATETIME do MySQL)

        foreach([$d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12, $d13, $d14] as $datas) {
            echo "Data: {$datas}<br>";
        }

    //OBS: o fuso horário padrão não é o brasileiro, é o de Berlim 
?>