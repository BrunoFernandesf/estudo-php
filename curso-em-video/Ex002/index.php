<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Data Atual</h1>
    <p>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo "A data atual é: " . date("d/M/Y");
            echo " A hora é: " . date("G:i:s");
        ?>
    </p>
</body>
</html>