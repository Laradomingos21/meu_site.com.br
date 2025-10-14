<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="palindromo.php" method="post">
        <p><input type="text" name="palavra" required></p>
        <button type='submit'>palindromo</button>

<?php
    $palavra = $_POST ['palavra'];
    if ($palavra = strrev($palavra)) {
        echo "$palavra é palíndromo";
    } else {
        echo "$palavra não é palíndromo";
    }
?>