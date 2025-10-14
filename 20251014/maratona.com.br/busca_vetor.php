<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="busca_vetor.php" method="post">
        <label>Valor:</label>
        <p><input type="number" name="busca" required></p>
        <br>
    <button type='submit'>busca</button>
</body>
</html>


<?php
    $vetor = [4, 8, 15, 16, 23, 42, 55, 90, 78, 45];
    $busca = intval($_POST['busca']);
    $achou = false;
    foreach ($vetor as $i => $valor){
        if ($valor == $busca) {
            $real = $i+1;
            echo "Número encontrado na posição $real";
            $achou = true;
            break;
        }
    }
    if (!$achou) echo "número não encontrado";
?>