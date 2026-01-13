<?php

// Inserir um array dentro de uma array cria um array multidimensional (matriz)
// Para acessar um elemento de uma matriz usa-se duas chaves, o número do vetor e a posição do elemento do vetor, nessa ordem

    $matriz = [
        range(1, 26),          
        range('a', 'z'),        
        ['PHP', 'JavaScript', 'Python', 'Java', 'C#', 'C++', 'C']
    ];

    echo $matriz[0][14] . "<br>"; // Acessa o décimo quinto elemento do primeiro vetor
    echo $matriz[1][14] . "<br>"; // Acessa o décimo quinto elemento do segundo vetor
    print_r($matriz[2]); // Acessa todo o terceiro vetor
?>