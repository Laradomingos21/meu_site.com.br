<?php
    $nome = $_POST['nome'];
    $nnotas = $_POST['nnotas'];
    $snotas = $_POST['snotas'];
    $media = $snotas / $nnotas;
    $media = round($media,2);
    $materia = $_POST['materia'];
    if ($media >= 7){
        echo "o(a) aluno(a) $nome está <strong style='color: green'> aprovado </strong> na disciplina $materia! (média: $media)<br>";
    } else if ($media >= 5 and $media < 7){
        echo "o(a) aluno(a) $nome está de <strong style='color: orange'> recuperação </strong> na disciplina $materia (média: $media)<br>";
    } else if ($media >= 0 and $media <5){
        echo "O(a) aluno(a) $nome está <strong style='color: red'> reprovado </strong> na disciplina $materia (média: $media)<br>";
    } else {
        echo "média/nota inválida<br>";
    }
?>