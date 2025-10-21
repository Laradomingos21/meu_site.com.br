
<?php
    $premio = $_POST['premio'] ?? '';
    $sorteio = rand(1, 1000);
    if ($sorteio == $premio ) {
        echo 'parabéns, você ganhou ';
    } else {
        echo 'que pena, não foi dessa vez! O número sorteado foi ' . $sorteio . "<br>";
    }

    date_default_timezone_set ("America/Sao_Paulo");
    echo "Data atual: " . date("d/m/Y") . "<br>";
    echo "Horas atual: " . date("H:i:s") . "<br>";

?>