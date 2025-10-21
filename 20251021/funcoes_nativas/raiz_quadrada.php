<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
</head>
<body>
    <form action="raiz_quadrada.php" method="post">
        <p>Digite um número</p>
            <input type="text" name="numero"><br><br>
            <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    $n = $_POST['numero'] ?? '';
    echo "<br>Raiz: " . sqrt ($n);
?>