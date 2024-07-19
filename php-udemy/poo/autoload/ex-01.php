<?php 

function MeuAutoload($nomeClasse){

    require_once($nomeClasse. ".php");
}

spl_autoload_register("MeuAutoload");

$carro = new Civic();
$carro->acelerar(80);


?>