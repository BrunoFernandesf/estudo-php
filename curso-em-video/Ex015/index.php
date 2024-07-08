<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa salário</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $salariomin = 1_380.60;
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salariomin, 2 , ",",)?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            //Cálculos
            $result = intdiv($salario, $salariomin);
            $rest = $salario % $salariomin;

            echo "Quem recebe um salário de R$ $salario ganha <strong>$result salários mínimos</strong> + R$" . number_format($rest, 2 , ",",);
        ?>
    </section>
</body>
</html>