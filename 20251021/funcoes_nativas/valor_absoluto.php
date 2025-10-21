<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absoluto</title>
</head>
<body>
     <form action="valor_absoluto.php" method="post">
        <p>Digite um número</p>
            <input type="text" name="valor"><br><br>
            <input type="submit" value="calcular">
    </form>
</body>
</html>
<?php
    $n = $_POST['valor'] ?? '';
    echo '<br> valor absoluto: ' . abs($n);
?>