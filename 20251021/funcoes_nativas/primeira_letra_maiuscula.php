<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra Maíuscula</title>
</head>
<body>
    <form action="primeira_letra_maiuscula.php" method="post">
        <p>Digite uma frase:</p>
            <input type="text" name="letra"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $k = $_POST['letra'] ?? '';
    echo "O seu nome: $k deve ser escrito assim: " . ucfirst($k);
?>