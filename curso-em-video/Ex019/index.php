<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $precAjust = $_GET['precAjust'] ?? 0;

    ?>
    <main>
        <h1>Resultado do Reajuste</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>">

            <label for="precAjust">Qual será o percentual de reajuste? (<strong><span id="p">0</span>%</strong>)</label>
            <input type="range" name="precAjust" id="precAjust" max="100" step="1" oninput="mudaValor()" value="<?=$precAjust?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
            //Cálculos
            $precFinal = $preco * (1 + ($precAjust/100));

            echo "O produto que custava R$$preco com <strong>$precAjust% de aumento</strong> vai passar a custar <strong>R$$precFinal</strong> a partir de agora."
            
        ?>
    </section>
    <script>
        function mudaValor(){
            p.innerText = precAjust.value;
        }
    </script>
</body>
</html>