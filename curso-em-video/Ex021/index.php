<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $reais = $_GET['reais'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="reais">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="reais" id="reais" value="<?=$reais?>">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?number_format($reais,2, ".",",")?> realizado</h2>
        <?php 
            //Cálculos
            $resto = $reais;
            $tot100 = floor($resto/100);
            $resto %= 100;

            $tot50 = floor($resto/50);
            $resto %= 50;

            $tot10 = floor($resto/10);
            $resto %= 10;

            $tot5 = floor($resto/5);
            $resto %= 5;
       
            echo "O caixa eletrônico vai te entregar as seguintes notas: ";
            echo "<ul>"; 
            echo "<li>$tot100 notas de cem</li>";
            echo "<li>$tot50 notas de 50</li>";
            echo "<li>$tot10 notas de 10</li>";
            echo "<li>$tot5 notas de 5</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>