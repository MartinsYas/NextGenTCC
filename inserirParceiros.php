<?php

require_once 'conexao.php';

if($_POST){

    $nomeEmpresa = $_POST['nomeEmpresa'];
    $nomeContatante = $_POST['nomeContatante'];
    $emailContatante = $_POST['emailContatante'];

    $sql ="INSERT INTO empresasParceiras (nomeEmpresa, nomeContatante, emailContatante) values ('$nomeEmpresa', '$nomeContatante', '$emailContatante')";

    if($conexao->query($sql)){
        header("Location:parceiros.html");
        echo "certo";
    } 
    else{
        die("Erro" .$sql. ''.$conexao -> connect_error);
    } 
    $conexao->close();
}

?>