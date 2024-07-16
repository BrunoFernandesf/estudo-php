<?php 

    function ola($texto){

        return "Olá $texto!";

    }

    echo ola("Mundo");

    function olaPers($texto = "Mundo"){
        return "Olá $texto!";
    }

    echo olaPers();

?>