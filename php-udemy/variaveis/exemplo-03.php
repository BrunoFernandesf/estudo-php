<?php 
//Básico
    #String
    $nome = "Bruno";
    $sobrenome = 'Fernandes';

    #Int
    $ano = 1996;

    #Float
    $salario = 5500.99;

    #Boolean
    $valido = true;
//////////////////////////////////////////////
//Composto
    #Array
    $frutas = array("Abacaxi", "Laranja", "Manga");
    echo "$frutas[2] \n";

    #Objeto
    $nascimento = new DateTime();
    var_dump($nascimento);

//////////////////////////////////////////////
//Especiais
    $arquivo = fopen("exemplo-03.php", "r");
    var_dump($arquivo);

    $nulo = NULL;
?>