<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 05/10/2017
 * Time: 14:21
 */
require_once("../util/conecta.php");

//CONTROLLER RECEBE MONTA UM USUARIO E MANDA PRO DAO
$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$celular = $_POST["celular"];
$email = $_POST['email'];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$rg = $_POST["rg"];
$tipo = $_POST["tipo"];


//FUNCAO CHAMADA NO CONTROLLER
//insereMembro($conexao, $nome, $usuario, $senha, $celular, $email, $cpf, $telefone, $endereco, $rg, $tipo);
listaMembros($conexao);
//inativarMembro($conexao, 10);
//alteraMembro($conexao,10,"teste","teste","123","9999999","fula@asdas","66666","ende","4564645",1);
//ativarMembro($conexao, 10);


//VAI RECEBE UM OBJETO USUARIO E UMA CONEXAO
function insereMembro($conexao, $nome, $usuario, $senha, $celular, $email, $cpf, $telefone, $endereco, $rg, $tipo){
    $query="insert into usuario (nome, usuario, senha, celular, ativo, email, cpf, telefone, endereco, rg, tipo) values
            ('{$nome}','{$usuario}','{$senha}','{$celular}','1', '{$email}', '{$cpf}','{$telefone}','{$endereco}','{$rg}', '{$tipo}')";
    return mysqli_query($conexao, $query);
}

function listaMembros($conexao){
    $membros = array();
    $resultado = mysqli_query($conexao, "select * from usuario");
    while($membro = mysqli_fetch_assoc($resultado)){
        array_push($membros,$membro);
    }
//    echo "<pre>";
//    var_dump($membros);
//    echo "</pre>";
    return $membros;
}

function inativarMembro($conexao, $idUsuario){
    $query = "update usuario set ativo='0' where idUsuario ='{$idUsuario}'";
    return mysqli_query($conexao, $query);
}

function alteraMembro($conexao, $idUsuario, $nome, $usuario, $senha, $celular, $email, $telefone, $endereco, $rg, $tipo){
    $query = "update usuario set nome= '{$nome}', usuario = '{$usuario}', senha= '{$senha}',
  celular = '{$celular}', email= '{$email}', telefone='{$telefone}', endereco='{$endereco}', rg='{$rg}', tipo='{$tipo}' where idUsuario ='{$idUsuario}'";
    return mysqli_query($conexao, $query);
}


function ativarMembro($conexao, $idUsuario){
    $query = "update usuario set ativo='1' where idUsuario ='{$idUsuario}'";
    return mysqli_query($conexao, $query);
}