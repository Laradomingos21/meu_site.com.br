<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir Variável</title>
</head>
<body>
     <form action="destroi_variavel.php" method="post">  
        <p>Qual sua idade?</p>
            <input type="number" name="idade"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $idade = $_POST['idade'];
    unset ($idade); //destrói variavel, exclui ela do sistema

    var_dump(isset($idade)); 
?>