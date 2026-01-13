<?php

// É possível criar variáveis apartir de arrays associativos usando o 'extract'. Nesse caso o nome da variável será igual ao nome da chave. Caso ja haja uma variável com o mesmo nome da chave ela será sobrescrita.

    $cor = "Preto";

    echo "Cor (antes do extract): $cor <br> <br>";

    $arr = [
        'cor' => 'Vermelho',
        'ano' => 2006,
        'marca' => 'Fiat',
        'modelo' => 'Palio'
    ];

    extract($arr); // Extrai as chaves do array como variáveis

    echo "Cor (depois do extract): $cor <br>";
    echo "Ano: $ano <br>";
    echo "Marca: $marca <br>";
    echo "Modelo: $modelo <br>";

// Também é possível realizar a operação contrária. Usando 'compact' é possível criar um array apartir de variáveis. As chaves do array serão os nomes das variáveis e os valores serão os valores das variáveis.

    $cidade = "São Paulo";
    $estado = "SP";
    $pais = "Brasil";

    $localizacao = compact('cidade', 'estado', 'pais'); // Cria um array com as variáveis

    echo "<br>Array criado com compact: <br>";
    print_r($localizacao);

    // Importante notar que os nomes das variáveis no compact devem ser passadas como Strings 

?>