<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $dol = 5.61;
            $reais = $_GET["reais"];
            $convert = $reais / $dol;

            echo "Seus R$ $reais equivalem a US<strong>\$" . number_format($convert,2, ",", ".") . "</strong>";
            echo "<p>*<strong>Cotação fixa de R$5.61</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>