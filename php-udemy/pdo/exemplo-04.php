<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "***");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= :ID");

    $id = 1;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

?>