     <form action="nomes.php" method="post">
    <label>Nome:</label>
    <input type="text">
    <input type= "submit" value="Cadastrar">
    </form>
    <h3>Lista de atendimentos</h3>
<?php
    //inserindo o cliente no arquivo atendimento.txt
    $nome_do_atendimento = $_POST['cliente'] ?? '';
    $arquivo = fopen("atendimento.txt", "a");
    fwrite($arquivo, "$nome_do_atendimento\n");
    echo "<hr>";
    fclose($arquivo);
   //Listar os nomes cadastrados no arquivo.txt
    $arquivo2 = fopen("atendimeto.txt", "r");
    while(!feof($arquivo2)) {
    echo fgets($arquivo2) . "<br>";
    }
    fclose($arquivo2); 
?>