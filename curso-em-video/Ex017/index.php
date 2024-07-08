<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $number1 = $_GET['number1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $number2 = $_GET['number2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number1">Número 1</label>
            <input type="number" name="number1" id="number" value="<?=$number1?>">
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso" value="<?=$peso1?>">

            <label for="number2">Número 2</label>
            <input type="number" name="number2" id="number" value="<?=$number2?>">
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das médias</h2>
        <?php 
            //Cálculos
            $mediaArit = ($number1 + $number2) / 2;
            $mediaPond = (($number1 * $peso1) + ($number2 * $peso2)) / ($peso1 + $peso2);
                
            echo "<p>Analisando os valores $number1 e $number2:</p>";

            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaArit, 2, ",", ",") . "</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($mediaPond, 2, ",", ",") . "</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>