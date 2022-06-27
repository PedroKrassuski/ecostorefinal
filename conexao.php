<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'bali0102';
    $dbName = 'ecostore';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else {
        echo "Conexão efetuada com sucesso";
    }
    */

?>