<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "***");

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");

    $id = 2;

    $stmt->execute(array($id));

    //$conn->rollBack();
    $conn->commit();

    echo "Executou o delete";

?>