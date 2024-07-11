<?php 
    $qualIdade = 28;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($qualIdade < $idadeCrianca){
        echo "Criança";
    }
    else if($qualIdade < $idadeMaior){
        echo "Adolescente";
    }
    else if($qualIdade < $idadeMelhor){
        echo "Adulto";
    }
    else {
        echo "Idoso";
    }

?>