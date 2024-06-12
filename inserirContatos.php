<?php

require_once 'conexao.php';

if($_POST){

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contatos (nome, sobrenome, email, telefone, assunto, mensagem) values ('$nome', '$sobrenome', '$email', '$telefone', '$assunto', '$mensagem')";

    if($conexao->query($sql)){
        header("Location:faleconosco.html");
    } 
    else{
        die("Erro" .$sql. ''.$conexao -> connect_error);
    }
    $conexao->close();
}

?>