<?php 

    $a = 10;

    function trocaValor($a){

        $a = 50;
        return $a;

    }

    echo $a;
    echo "<br>";
    echo trocaValor($a);
    echo "<br>";
    echo $a;

    echo "<br>";
    
    //Por referência
    echo "<br>";

    $b = 10;

    function trocaValorB(&$b){
        $b = 50;
        return $b;
    }

    echo $b;
    echo "<br>";
    echo trocaValorB($b);
    echo "<br>";
    echo $b;
?>