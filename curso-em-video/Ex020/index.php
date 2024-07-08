<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            //Cálculos
            $minutos = intdiv($segundos, 60);
            $horas = intdiv($minutos, 60);
            $dias = intdiv($horas, 24);
            $semanas = intdiv($dias, 7);
       
            echo "Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de: ";
            echo "<ul>"; 
            echo "<li>$segundos segundos</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$semanas semanas</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>