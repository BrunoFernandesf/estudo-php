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
        $anoAtual = 2024;
        $anoNascim = $_GET['anoNascim'] ?? 0;
        $anoAlv = $_GET['anoAlv'] ?? 0;

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anoNascim">Em que ano você nasceu?</label>
            <input type="number" name="anoNascim" id="anoNascim" value="<?=$anoNascim?>">

            <label for="anoAlv">Quer saber sua idade em que ano? (Atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="anoAlv" id="anoAlv" value="<?=$anoAlv?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            //Cálculos
            $result = $anoAlv - $anoNascim;
                
            echo "<p>Quem nasceu em $anoNascim vai ter <strong>$result anos</strong> em $anoAlv</p>";
        ?>
    </section>
</body>
</html>