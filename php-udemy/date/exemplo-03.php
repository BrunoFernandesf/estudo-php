<?php 

    $dt = new DateTime();

    echo $dt->format("d/m/Y H:i:s");

    echo "<br>";
    //Aplicando a classe DateInterval

    $periodo = new DateInterval("P15D");

    $dt->add($periodo);

    echo $dt->format("d/m/Y H:i:s");

?>