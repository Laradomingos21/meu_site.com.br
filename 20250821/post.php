<?php
    //POST RECEBE AS VARIÁVEIS POR FUNÇÃO
    $valor1 = $_POST["valor1"];
    $valor2 =  $_POST["valor2"];
    $sinal = $_POST['sinal'];

    $resultado = $valor1.$sinal.$valor2 ;
    echo $resultado;
    //O SINAL DE + É TRANSFERIDO NORMALMENTE EM POST
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

?>