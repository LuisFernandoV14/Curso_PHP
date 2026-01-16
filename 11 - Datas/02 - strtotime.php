<?php

// A função 'strtotime' recebe uma String como parâmetro, um texto sinalizando o tempo, e então tenta interpretar e transformar em data:
        
        echo date('d/m/Y', strtotime('+2 years'));
        echo "<br>";
        echo date('d/m/Y', strtotime('+2 anos')); // Não funciona com instruções em português
        echo "<br>";
        
        $tempo = strtotime("+6 days, -20 years, +6 months");
        $dia = date('d - m - Y', $tempo);

        echo $dia;

?>