<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin= :LOGIN, dessenha= :PASSWORD WHERE idusuario= :ID");

    $login = "jose";
    $password = "12444";
    $id = 1;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

?>