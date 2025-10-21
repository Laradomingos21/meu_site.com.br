<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="palindromo.php" method="post">  
        <p>Qual seu nome?</p>
            <input type="text" name="text"><br><br>
            <button type="submit">Palíndromo</button><br><br>
    </form>
</body>
</html>

<?php
    $texto = $_POST['text'] ?? '';
    $texto_invertido = strrev ($texto);
        echo "Seu nome invertido é " . $texto_invertido . "<br>";
    if ($texto = $texto_invertido){
        echo ("$texto é uma palavra palindrômo!");
    } else {
        echo ("$texto não é uma palavra palindrômo");
    }
   
   
?>