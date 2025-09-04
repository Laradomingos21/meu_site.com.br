<?php
    require 'nota.php';
    $nome = $_POST['nome'];
    $materia = $_POST['materia'];
    $nota = $_POST['nota'];
    $nots = $_POST['nots'];
    $avaliacao = ($nota / $nots); 
        if ($avaliacao >= 7) {
            echo "$nome, você foi <strong style='color: green'>aprovado!</strong> em $materia";
        } else if ($avaliacao >=5 && $avaliacao <7) {
            echo "$nome, você ficou de <strong style='color: orange'>recuperação!</strong> em $materia";
        } else if ($avaliacao >=0 && $avaliacao <5) {
            echo "$nome você foi <strong style='color: red'> reprovado!</strong> em $materia";
        }
?>
