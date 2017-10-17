<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 17/10/2017
 * Time: 18:02
 */


require_once "../model/Tarefa.php";
require_once  "../DAO/tarefaDAO.php";

$funcionalidade = $_POST["funcionalidade"];



if($funcionalidade == "create"){
    $nomeTarefa = $_POST["nomeTarefa"];
    $frequencia = $_POST["frequencia"];
    $designado = $_POST["designado"];
    $dataInicial = $_POST["dataInicial"];
    $dataLimite = $_POST["dataLimite"];
    $descricao = $_POST["descricao"];

    $m = new Membro($nome, $usuario, $senha, $celular, $ativo, $email, $cpf, $telefone, $endereco, $rg, $tipo);

    insereMembro($conexao, $m);

    header("Location: ../view/principalGerente.php");

}elseif ($funcionalidade == "update"){

    $idTarefa = $_POST["idTarefa"];
    $nomeTarefa = $_POST["nomeTarefa"];
    $frequencia = $_POST["frequencia"];
    $designado = $_POST["designado"];
    $dataInicial = $_POST["dataInicial"];
    $dataLimite = $_POST["dataLimite"];
    $descricao = $_POST["descricao"];

    $m = new Membro($nome, $usuario, $senha, $celular, $ativo, $email, $cpf, $telefone, $endereco, $rg, $tipo);

    alteraMembro($conexao, $m, $idUsuario);

    header("Location: ../view/listarTarefas.php");

}elseif ($funcionalidade == "list"){
    listaTarefas($conexao);
}elseif ($funcionalidade == "delete"){
    $idUsuario = $_POST["idUsuario"];
    inativarMembro($conexao, $idUsuario);
    header("Location: ../view/listarMembros.php");
}elseif ($funcionalidade == "active"){
    $idUsuario = $_POST["idUsuario"];
    ativarMembro($conexao, $idUsuario);
    header("Location: ../view/recuperarMembro.php");
}
