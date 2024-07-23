<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "***");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

    $login = "jose";
    $password = "12444";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

?>