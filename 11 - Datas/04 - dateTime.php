<?php

// DateTime permite tratar datas como um objeto. É possível passar parâmetros na hora da instanciação para criar uma data, caso não seja passado parâmetros será a data atual. 
// Para exibirmos informações usamos o print_r    

$dataAtual = new DateTime();

print_r($dataAtual);
echo "<br>";

$natal2026 = new DateTime("2026/12/25 00:00:00.000000");
print_r($natal2026);
echo "<br><br>";

// Na variavel 'natal2026' eu deixei como é a formatação de data do DateTime

    // Métodos importantes do DateTime:

            // format() é um método para formatar datas. modify() é um método para alterar datas

            $data = new DateTime();

            echo $data->format('d/m/Y') . "<br>";
            echo $data->format('D - M - Y') . "<br>";

            $data->modify("+6 days, -20 years, +6 months");

            echo $data->format('d/m/Y') . "<br>";
            echo $data->format('D - M - Y') . "<br>";

            echo "<br>";

            // setDate muda a data inteira. setTime muda o tempo da data

            $data->setDate("1988", "09", "10"); // Recebe ano-mês-dia
            $data->setTime("15", "59", "59"); // Recebe hora-minuto-segundo

            print_r($data);

            echo "<br><br>";

            // diff() serve para descobrir a diferença entre as datas

            $diferenca = $data->diff($natal2026);
            print_r($diferenca);

            echo "<br>" . $diferenca->format("%y year, %m month, %d day, %a total days");

                /* Para formatar uma data vinda de um diff entre duas datas: 
                    Código,Descrição,Exemplo
                    %y,Anos,"0, 1, 2..."
                    %m,Meses,"0, 1, 2..."
                    %d,Dias,"0, 1, 2..."
                    %a,Total de dias (Diferença total),344
                    %h,Horas,"0, 1..."
                    %i,Minutos,"0, 1..."
                    %s,Segundos,"0, 1..."
                    %R,Sinal (+ ou -),+
                */

            echo "<br><br>";

            // Comparando datas
                
                // Datas que foram criadas usando DateTime podem ser comparadas usando os operadores '<' '>' e '=='

                var_export($data < $natal2026);
                echo "<br>";
                var_export($data > $natal2026);
                echo "<br>";
                var_export($natal2026 == $natal2026);
                echo "<br>";

                echo "<br>";
            
            // Alterando o fuso horário

                    // O PHP usa o fuso horário do servidor que está sendo executado por padrão, para trocá-lo usamos:

                    echo date_default_timezone_get() . ": <br>";
                    echo date("d - m - Y H:i:s") . "<br>";
                    date_default_timezone_set('America/Sao_Paulo');
                    echo date_default_timezone_get() . ": <br>";
                    echo date("d - m - Y H:i:s") . "<br>";



?>