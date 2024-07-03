<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            $wholeNumb = floor($num);
            $decimal = $num - $wholeNumb;

            echo "Analisando o número <strong>$num</strong> informado pelo usuário";
            echo "<ul><li>A parte inteira do número é <strong> $wholeNumb</strong></li>";
            echo "<li>A parte decimal do número é <strong>" . number_format($decimal,3, ",", ".") . "</strong></li></ul>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>