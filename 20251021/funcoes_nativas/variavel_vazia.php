<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="variavel_vazia.php" method="post">  
        <p>Digite um valor:</p>
            <input type="text" name="valor"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $valor = $_POST['valor'] ?? '';
    if (empty($valor)) {
        echo "A variável está vazia!";
    } else {
        echo "A variável tem valor.";
    }
?>