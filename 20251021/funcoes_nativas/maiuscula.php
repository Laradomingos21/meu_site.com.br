<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiúscula</title>
</head>
<body>
     <form action="maiuscula.php" method="post">
        <p>Digite uma frase:</p>
            <input type="text" name="palavra"><br><br>
            <input type="submit" value="transformar"><br><br>
</body>
</html>

<?php
    $txt = $_POST['palavra'] ?? '';
    echo "A frase: $txt vai ficar assim: " . strtoupper ($txt) . " em Maiúscula";

?>