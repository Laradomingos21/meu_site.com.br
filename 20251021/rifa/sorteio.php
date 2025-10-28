<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="sorteio.css">
</head>
<body>
    <h1>Sorteio</h1>
    <form action="resultado.php" method="post">
        <label for="nome">Digite o seu nome:</label>
        <input type="text" id="nome" name="nome">
       
        <label for="ganhar">O que você quer ganhar?</label>
        <input type="text" id="ganhar" name="ganhar">
       
        <label for="premio">Digite o número da sua rifa:</label>
        <input type="number" id="premio" name="premio">
       
        <button type="submit">Enviar</button>
    </form>

    <div class="sorteio">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4yLAx_v8cAsCzCdSGoPuRKE0vP0BbkBn-nQ&s" alt="rifa">
    </div>

</body>
</html>
