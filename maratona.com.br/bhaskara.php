<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bhaskara.php" method="post">
        <label>Valor a:</label>
        <p><input type="number" name="valora" required></p>
        <br>
        <label>Valor b:</label>
        <p><input type="number" name="valorb" required></p>   
        <br>
        <label>Valor c:</label>
        <p><input type="number" name="valorc" required></p>
        <br>
    <button type='submit'>bhaskara</button>
</body>
</html>
<?php
    $valora = $_POST['valora'];
    $valorb = $_POST['valorb'];
    $valorc = $_POST['valorc'];
    $delta = ($valorb^2)+4*$valora*valorc;
    $raiz1 = (($valorb*-1)-$delta)/2*$valora;
    $raiz2 = (($valorb*-1)-$delta)/2*$valora;
    echo "as raízes são $raiz1 e $raiz2";
?>