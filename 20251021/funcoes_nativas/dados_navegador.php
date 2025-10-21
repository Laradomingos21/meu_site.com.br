<?php
    echo "<h2>Informações do Acesso </h2>";

    $ip = $_SERVER['REMOTE_ADDR']; // Ip do usuário 
    $navegador = $_SERVER['HTTP_USER_AGENT']; // Navegador e sistema operacional
    $servidor = gethostname (); // nome do servidor
    $versaoPHP = phpversion(); // versão do php instalada

    echo " IP do usuário: " . $ip . "<br>";
    echo " Navegador: " . $navegador . "<br>";
    echo " Servidor: " . $servidor . "<br>";
    echo " Versão do PHP: " . $versaoPHP . "<br>";
?> 