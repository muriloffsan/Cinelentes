<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinelentes";

    $conexao = new mysqli ($host, $username, $password, $dbname);

    if (!$conexao) {
        die("Falha na conexão com obanco de dados ". mysqli_connect_error());
    }
?>