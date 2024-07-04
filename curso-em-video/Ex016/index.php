<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $number = $_GET['number'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" value="<?=$number?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            //Cálculos
            $resSqr = sqrt($number);
            $resCub = pow($number, 1/3);
            
            echo "<p>Analisando o <strong>número $number</strong></p>";

            echo "<ul>";
            echo "<li>A sua raíz quadrada é <strong>" . number_format($resSqr, 3, ",", ",") . "</strong></li>";
            echo "<li>A sua raíz cúbica é <strong>" . number_format($resCub, 3, ",", ",") . "</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>