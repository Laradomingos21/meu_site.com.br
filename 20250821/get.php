<?php
    //GET RECEBE AS VARIÁVEIS POR URL
    echo $_GET["nome"], "<br>";
    $valor1 = $_GET["valor1"];
    $valor2 =  $_GET["valor2"];
    $sinal = $_GET['sinal'];

    $resultado = $valor1.$sinal.$valor2;
    echo $resultado;
    
    if($sinal == "*"){
        echo "=" . $valor1 * $valor2 . "<br>";
    }
    if($sinal == "/"){
        echo "=" . $valor1 / $valor2 . "<br>";
    }
    if($sinal == "-"){
        echo "=" . $valor1 - $valor2 .  "<br>";
    }
    if($sinal == "+"){
        echo "=" . $valor1 + $valor2 . "<br>";
    }
//meu_site.com.br/get.php?valor1=15&alor2=33&sinal=*
?>