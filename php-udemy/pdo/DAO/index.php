<?php 

    require_once("config.php");

    //$user = new User();
    //$user->loadById(2);
    //echo $user;

    //$lista = User::getList();
    //echo json_encode($lista);

    //$search = User::search("jo");
    //echo json_encode($search);


    //$usuario = new User();
    //$usuario->login("Brun", "123");
    //echo $usuario;

    $usuario = new User();
    $usuario->loadById(2);
    $usuario->delete();
    echo $usuario;

?>