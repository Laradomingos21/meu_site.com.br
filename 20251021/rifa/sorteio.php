<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
    <h2>Sorteio</h2>
    <form action="resultado.php" method="post">
        <p>Digite o nome do ganhador</p>
        <input type = "text" name="nome"><br>
        <p>O que você quer ganhar?</p>
        <input type = "text" name="ganhar"><br>
        <p>Digite o número da sua rifa:</p>
        <input type ="text" name= "premio"><br><br>  
        <button type="submit">Ganhador</button><br><br>
    </form>
</body>
</html>

<?php
    $premio = $_POST['premio'] ?? '';
?>

