<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca Texto</title>
</head>
<body>
    <form action="troca_texto.php" method="post">
        <p>Digite uma frase:</p>
            <input type="text" name="frase"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $w = $_POST['frase'] ?? '';
    $novo_w = str_replace ('a', 'u', $w);
    $novo_b = str_replace ('i', 'u', $novo_w);
    $novo_c = str_replace ("o", "u", $novo_b);
    $novo_d = str_replace ("e", "u", $novo_c);
    echo $novo_d;
?>