<?php


    require 'conexao.php';



    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $consulta = $cn->query("select email from usuario where email = '$email'");
    if($consulta->rowCount() == 1){
        header('location:erro1.html');
    }else{
        $insert = $cn->query("insert into usuario (primeiro_nome, email, cpf, senha, sobrenome) values ('$nome', '$email', '$cpf', '$senha', '$sobrenome')");
        header('location:index.php');
    }



?>