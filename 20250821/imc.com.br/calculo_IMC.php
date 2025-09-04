<?php 
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura = $_POST['altura'];
    $altura2 = $altura/100;
    $peso = $_POST['peso'];
    $IMC = ($peso / ($altura2 * $altura2));
    echo "$nome você está com $idade anos e seu IMC é: $IMC<br>";
    echo "<a href='https:www.saudebemestar.pt/pt/blog/nutricao/imc/' target='_blank'><img src='https://www.saudebemestar.pt/media/89347/obesidade.jpg' alt='IMC' width='663' heigth='400'></a>'<br>'";
    echo "<a href='http://localhost/meu_site.com.br/imc.com.br/'>Clique aqui para voltar na página inicial!<a/><br>";
?>  