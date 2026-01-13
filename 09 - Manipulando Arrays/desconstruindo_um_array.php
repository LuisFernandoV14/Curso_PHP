<?php

// É possível criar varias variáveis apartir de um array só usando a função nativa "list()"

    $arr = ['Thiago', 'Desenvolvedor', 29, 'Brasil']; 

    list($nome, $profissao, $idade, $pais) = $arr; // A ordem das variáveis deve ser igual a ordem dos elementos do array

    print_r($arr);
    echo "<br>";

    echo "Nome: $nome <br>";
    echo "Profissão: $profissao <br>";
    echo "Idade: $idade <br>";
    echo "País: $pais";

// Com a função "array_slice" é possível resgatar parte de um array. array_slice() recebe 3 parâmetros, sendo eles: o array, a posição inicial e a quantidade de elementos a serem resgatados

    $arr2 = range(1, 100);
    $parte = array_slice($arr2, 14, 24); // Resgata 10 elementos a partir da posição 14

    echo "<br><br>Parte do array:  ";
    print_r($parte);

// Com a função "array_chunk é possível dividir um array em vários arrays menores. array_chunk() recebe 2 parâmetros, sendo eles: o array e a quantidade de elementos que cada array menor deve ter

    $dividido = array_chunk($arr2, 10); // Divide o array em arrays menores com 10 elementos cada

    echo "<br><br>Array dividido:  ";
    print_r($dividido);

// Chaves e valores de um array associativo

    $arrass = [
        'nome' => 'Ana',
        'idade' => 25,
        'profissao' => 'Designer',
        'pais' => 'Portugal'
    ];

    echo "<br><br>Array associativo: ";
    print_r($arrass);

        // Resgatando somente as chaves
            $chaves = array_keys($arrass);
            echo "<br><br>Chaves do array associativo: ";
            print_r($chaves);
        
        // Resgatando somente os valores
            $valores = array_values($arrass);
            echo "<br><br>Valores do array associativo: ";
            print_r($valores);

        // Verificando se uma chave existe no array
            $existeChave = array_key_exists('idade', $arrass);
            echo "<br><br>A chave 'idade' existe no array associativo? ";
            var_export($existeChave); // var_export() exibe o valor booleano como 'true' ou 'false'

// Com a função "array_splice" é possível remover uma parte de um array. O splice funciona de duas formas, com 3 parâmetros ele remove uma parte de um array e com 4 parâmetros ele remove uma parte de um array e insere novos valores no lugar

    $arr3 = range(1, 20);
    echo "<br><br>Array original: ";
    print_r($arr3);

    // Removendo parte do array
        $removidos = array_splice($arr3, 5, 10); // Remove 10 elementos a partir da posição 5
        echo "<br><br>Array após remoção: ";
        print_r($arr3);
        echo "<br>Elementos removidos: ";
        print_r($removidos);

    // Removendo parte do array e insere novos valores
        $novosValores = ['A', 'B', 'C'];
        array_splice($arr3, 2, 5, $novosValores); // Remove 5 elementos a partir da posição 2 e insere os novos valores
        echo "<br><br>Array após remoção e inserção de novos valores: ";
        print_r($arr3);
?>