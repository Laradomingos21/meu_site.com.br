<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECORTE</title>
</head>
<body>
    <form action="recorte_caractere.php" method="post">
        <p>Digite uma frase:</p>
            <input type="text" name="linda"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $l = $_POST['linda'] ?? '';
    echo "O seu nome é: $l <br>";
    echo "O seu apelido é: " . substr ($l, 0, 4);
?>