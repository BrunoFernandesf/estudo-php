<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <main>
        <?php
            //Mostre o número escolhido
            //O número antecessor
            //O número sucessor
            $num = $_GET["numero"];
            $ant = $num -1;
            $suc = $num +1;

            echo "<p>O número escolhido foi <strong>$num</strong>\n</p>";
            echo "<p>O seu antecessor é <strong>$ant</strong> \n</p>";
            echo "<p>O seu sucessor é <strong>$suc</strong></p>";
        ?>
        <p><a href="javascript:history.go(-1)"><-- Voltar</a></p>
    </main>
</body>
</html>