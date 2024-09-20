<?php

$localhost = "localhost";
$usuario = "root";
$senha = "prof@etec";
$db = "nextGenDB";

$conexao = new mysqli($localhost, $usuario, $senha, $db);
if ($conexao->connect_error) {
    die("Erro de conexão". $conexao->connect_error);
}

?>