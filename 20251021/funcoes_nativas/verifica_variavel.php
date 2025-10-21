<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verifica_variavel.php" method="post">  
        <p>Digite um nome:</p>
            <input type="text" name="nome"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $nome = $_POST['nome'] ?? '';
    if  (isset ($nome)) {
        echo "A variável existe!";
    } else {
        echo "A variável não existe";
    }
?>