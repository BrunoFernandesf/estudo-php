<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                //Mostre o número escolhido
                //O número antecessor
                //O número sucessor
                $num = $_GET["numero"];

                echo "O número escolhido foi <strong>$num</strong>";
                echo "<br>O seu antecessor é " . ($num -1);
                echo "<br>O seu sucessor é " . ($num +1);
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>