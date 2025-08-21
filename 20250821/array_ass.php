<?php
    $pessoa= ["nome" => "Lara", "idade" => 16];
    echo "<p> meu nome é $pessoa[nome] e eu tenho $pessoa[idade] anos </p>";
    $ano_atual = date('Y');
    $aluno = ["nome" => "Anna", "idade" => 16, "nota"=> 10];
    echo "<p> oii $aluno[nome], você tem  $aluno[idade]  anos e sua nota é  $aluno[nota] </p>";
    echo "<p> você nasceu em " . "(" .  $ano_atual . " - " . $aluno["idade"] . ")" . " = " .  $ano_atual - $aluno["idade"] . "</p>";
    $data = date(' j/m/Y; g:i:s ');
    echo "<p> hoje é dia:" . $data . "</p>";
    $today = date(' j/m/Y ');
    echo "<p> Hoje" . $today . " é o dia Mundial da Segurança e Saúde no Trabalho </p>";
      ?> 
