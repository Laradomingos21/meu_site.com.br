<?php
//a letra "a" faz inserir uma linha sem apagar a linha anterior
$arquivo = fopen("dados.txt", "a");
fwrite($arquivo, "Primeira linha de texto\n");
fclose($arquivo);
echo "Arquivo alterado com sucesso!";
?>