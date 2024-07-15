<?php 
    define("URL", "https://google.com.br");
    echo URL;


    $json = '[["GM","Cobalt","Onix","Camaro"],["Ford","Fiesta","Fusion","Ecosport"]]';

    $data = json_decode($json, true);

    var_dump($data);

?>