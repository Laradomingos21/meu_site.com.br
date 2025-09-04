<?php
$numero = $_POST['Número'];
function parOUímpar($num) {
    if ($num % 2 == 0) {
        echo "o número é <b>Par</b>";
    } else {
        return "o número é <b>Ímpar</b>";
    }
}
echo parOUímpar($numero);
?>