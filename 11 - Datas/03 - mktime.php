<?php

// A função 'mktime' cria uma data apartir dos parâmetros "hora, minuto, segundo, mês, dia e ano" nesse ordem

    $date = mktime(00, 06, 12, 12, 25, 2026);

    echo date("Y-m-d H:i:s", $date);

    // Toma cuidado ai pra nao errar na ordem dos parametros, o PHP é planejado para ser flexível então ele calcula a data com base nos parâmetros. Se eu colocar "25" no parâmetro que seria o mês por exemplo, ele calcularia 2 anos e 1 mês (janeiro de 2028)
?>