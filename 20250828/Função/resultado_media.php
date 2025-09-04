<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    function media($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
    echo "<h2>Resultado da média</h2>";
    echo "os números digitados foram: $n1, $n2 e $n3. A média é: " . media($n1, $n2, $n3) . "<br>";
    echo "<img src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg3wp_coYfAY6Usrop9A7xkKX1lOnjZdVPRGtbaz5D_vXWV0ubtuQ9QSI0iI6bP5QVhROnc5CfzQ6J4a4Fo1o4G469Q9zmrnWwtQxC46_a6Wyf__2xt3Mu4Pno5mEvDmjyQSZ44M8MCMes/s1600/mp.jpg' alt='Média' width='400' heigth='400'></a><br>";
    echo "<a href=http://localhost/meu_site.com.br/>Clique aqui para voltar na página inicial!<a/><br>";
?>