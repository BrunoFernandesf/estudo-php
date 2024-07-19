<?php 

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Bruno");
    $cad->setEmail("bruno@gmail.com");
    $cad->setSenha("123");

    $cad->registrarVenda();

?>