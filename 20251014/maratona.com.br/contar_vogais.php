<?php
    $str = "computador";
    /*a função nativa = preg_match_all() */
    /*realia buscas com parâmetro */
    $vogais = preg_match_all('/[aeiou]/i', $str);
    echo "total de vogais: $vogais";
?>