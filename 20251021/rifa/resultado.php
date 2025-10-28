<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Sorteio</title>
    <link rel="stylesheet" href="sorteio.css">
</html>

<?php
    session_start();
   
    $arquivo = 'ganhadores.txt';

    // Cria o arquivo se não existir
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, '');
    }

    // Botão para apagar ganhadores
    if (isset($_POST['tchau'])) {
        file_put_contents($arquivo, '');
        echo 'Lista de ganhadores apagada!' . "<br>";
    }

    // Lê conteúdo e transforma em array
    $conteudo = file_get_contents($arquivo);
    $ganhadores = $conteudo ? explode(PHP_EOL, $conteudo) : [];
   
    $sorteio = rand(1, 5);
    $nome = $_POST['nome'] ?? '';
    $ganhar = $_POST['ganhar'] ?? '';
    $premio = $_POST['premio'] ?? '';

    if (!isset($_SESSION['ganhador'])) {
        $_SESSION['ganhador'] = [];
    }

 
   if (in_array($nome, $_SESSION['ganhador'])){
        echo "<p>$nome você já ganhou um prêmio, <b>não</b> seja egoísta </p>";
   } else {
        if ($premio == $sorteio) {
            echo "<p><b>Parabéns $nome </b>" . "Você ganhou o prêmio: " . $ganhar . date_default_timezone_set ("America/Sao_Paulo") . "<br><br>";
            echo " No dia: " . date("d/m/Y") . "<br>";
            echo " As: "  . date("H:i:s") . "</p><br>";

        $registro = $nome . " | " . $ganhar . " | " . date("d/m/Y H:i:s") . PHP_EOL;
            file_put_contents($arquivo, $registro, FILE_APPEND);
        } else {
            echo "<p>Que pena, você não ganhou $ganhar, $nome! O número sorteado foi: $sorteio, quem sabe da próxima</p>";
        }
   }

   

    echo "<form action='sorteio.php' method='get'>
         <button type='submit'>Voltar</button>
         </form>";
    echo "<form method='post'>
            <button type='submit' name='tchau'>Tchau</button>
          </form>";
?>
