<?php

    $frutas = array("abacaxi", "laranja", "melancia");
    print_r($frutas);
    echo "<hr>";

    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";

    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Ecosport";

    for($i = 0; $i <= 1; $i++){
        echo $carros[$i][0];
        echo "<br>";
        for($j = 1; $j <= 3; $j++){
            echo $carros[$i][$j];
            echo "<br>";
        }
    }

?>