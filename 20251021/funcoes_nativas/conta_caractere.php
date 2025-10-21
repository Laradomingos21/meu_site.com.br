<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Caractere</title>
</head>
<body>
    <form action="conta_caractere.php" method="post">
        <p>Digite uma frase:</p>
            <input type="text" name="palavra"><br><br>
            <input type="submit" value="calcular"><br><br>
</body>
</html>
<?php
    $txt = $_POST['palavra'] ?? '';

    echo "A frase $txt tem: " . strlen ($txt) . " caracteres ";
?>