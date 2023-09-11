<?php

session_start();




    require 'conexao.php';

    
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "select * from usuario where email = '$email' and senha = '$senha'";
    $consulta = $cn->query($query);
    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['nome'] = $exibeUsuario['primeiro_nome'];
        header('location:icardpainel.php');
    }else{
        header('location:erro2.html');
        // echo $query;
    }



?>