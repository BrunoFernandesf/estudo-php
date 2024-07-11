<?php 

    $condicao = true;
    echo "Condição True";

    while($condicao){
        for($count = 0; $count <= 10; $count++){
            echo "Interação $count";
        }
        $condicao = false;
        echo "Condição False";
    }

?>