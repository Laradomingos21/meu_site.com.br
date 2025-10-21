<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e Menor</title>
</head>
<body>
    <form action="maior_menor.php" method="post">
        <p>Número a:</p>
            <input type="text" name="a"><br><br>
        <p>Número b:</p>
            <input type="text" name="b"><br><br>
        <p>Número c:</p>
            <input type="text" name="c"><br><br>
        <p>Número d:</p>
            <input type="text" name="d"><br><br>
        <p>Número e:</p>
            <input type="text" name="e"><br><br>
            <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    $a = $_POST['a'] ?? '';
    $b = $_POST['b'] ?? '';
    $c = $_POST['c'] ?? '';
    $d = $_POST['d'] ?? '';
    $e = $_POST['e'] ?? '';

    $maior_valor = max ($a, $b, $c, $d, $e); 
    $menor_valor = min ($a, $b, $c, $d, $e);

    echo "Valores comparados:" . $a . ",". $b .",". $c . "," . $d . "," . $e . "<br>";
    echo "O maior valor é: $maior_valor e o menor valor é: $menor_valor";
?>