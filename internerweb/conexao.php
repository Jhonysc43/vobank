<?php

    $servidor = "bancoicard.mysql.dbaas.com.br";
    $usuario = "bancoicard";
    $senha = "Bancoicard2@";
    $banco = "bancoicard";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    
?>