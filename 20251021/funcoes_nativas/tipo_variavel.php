<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="tipo_variavel.php" method="post">
        <p>Digite um número:</p>
            <input type="number" name="numero"><br><br>   
        <p>Digite uma frase:</p>
            <input type="text" name="texto"><br><br>
            <input type="submit" value="transformar"><br><br>
    </form>
</body>
</html>
<?php
    $numero = $_POST['numero'] ?? '';
    $numero_inteiro = (int)$numero;
    echo " O $numero é: " . gettype($numero_inteiro);
    echo "<br>";
    $texto = $_POST['texto'] ?? '';
    echo "O $texto é : " . gettype($texto);

?>