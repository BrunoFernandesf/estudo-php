<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        //escalares
        $num = 300;
        $num2 = 010;
        $num3 = (string) 900;

        echo "O número é: $num";
        echo "O número é: $num2";
        echo "O número é: $num3"; 

        var_dump($num);
        var_dump($num2);
        var_dump($num3);

        //compostos

        $vet = [6, 2, 9, 3, 5];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?> 
</body>
</html>