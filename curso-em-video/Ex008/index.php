<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Gerar um número aleatório de 0 a 100
        Botão abaixo que recarrega a tela e consequentemente gera outro número
    -->
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $rand = mt_rand(0, 100);

            echo "<p>Gerando um número aleatório entre o e 100...</p>";
            echo "O valor gerado foi <strong>$rand</strong>";
        ?>
        <button onclick="javascript:location.reload()">&#10227; Gerar outro</button>
    </main>
</body>
</html>