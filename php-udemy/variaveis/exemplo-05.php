<?php 
    $varTeste = true;
    function teste(){
        global $varTeste;
        echo "$varTeste";
    }

    
    echo "$varTeste";
    teste();

?>