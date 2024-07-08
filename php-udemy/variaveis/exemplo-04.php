<?php 
    //Por padrão o GET e POST recebe STRING
    $nome = (int)$_GET["a"];

    var_dump($nome);
    echo "$nome<br>";

    //Superglobal SERVER
    $ip = $_SERVER["REMOTE_ADDR"];
    echo "$ip";

?>