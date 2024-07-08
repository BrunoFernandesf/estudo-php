<?php 

    $valorTotal = 10;

    function adicionaValor(){

        global $valorTotal;
        if($valorTotal <= 0){
            $valorTotal += 100;
        } else {
            echo "Valor inválido\n";
        }
        

    }

    adicionaValor();
    echo "$valorTotal";

?>