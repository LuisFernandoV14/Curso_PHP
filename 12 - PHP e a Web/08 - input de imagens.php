<?php

// Para enviar arquivos ao servidor precisaremos mudar o 'enctype' do form para 'multipart/form-data'

// Também será necessário trocar o tipo de text para file
// Tem que ter cuidado, o tamanho do arquivo pode exaurir a memória do servidor

// Depois do envio, todos os dados da imagem estarão em $_FILES

print_r($_FILES);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input de Imagens</title>
</head>
<body>
    
    <form action="08 - input de imagens.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem" placeholder="Coloque aqui uma arquivo">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>


</body>
</html>