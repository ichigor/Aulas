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
    $idUsuario = $_POST["designado"];
    $dataInicial = $_POST["dataInicial"];
    $dataFinal = $_POST["dataFinal"];
    $descricao = $_POST["descricao"];
    $status = "Em andamento";
    $idUsuario = 11;

    $t = new Tarefa($nomeTarefa, $status, $frequencia, $descricao, $dataInicial, $dataFinal, $idUsuario);

    insereTarefa($conexao, $t);

    header("Location: ../view/principalGerente.php");

}elseif ($funcionalidade == "update"){

    $idTarefa = $_POST["idTarefa"];
    $nomeTarefa = $_POST["nomeTarefa"];
    $frequencia = $_POST["frequencia"];
    $designado = $_POST["designado"];
    $dataInicial = $_POST["dataInicial"];
    $dataFinal = $_POST["dataFinal"];
    $descricao = $_POST["descricao"];
    $status = "";
    $idUsuario = 11;

    $t = new Tarefa($nomeTarefa, $status, $frequencia, $descricao, $dataInicial, $dataFinal, $idUsuario);

    alteraTarefa($conexao, $t, $idTarefa);

    header("Location: ../view/listarTarefas.php");

}elseif ($funcionalidade == "list"){
    listaTarefas($conexao);
}elseif ($funcionalidade == "delete"){
    $idTarefa = $_POST["idTarefa"];
    cancelarTarefa($conexao, $idTarefa);
    header("Location: ../view/listarTarefas.php");
}elseif ($funcionalidade == "completed"){
    $idTarefa = $_POST["idTarefa"];
    var_dump($idTarefa);
    concluirTarefa($conexao, $idTarefa);
    header("Location: ../view/avaliarTarefas.php");
}elseif ($funcionalidade == "incomplete"){
    $idTarefa = $_POST["idTarefa"];
    naoConcluirTarefa($conexao, $idTarefa);
    header("Location: ../view/avaliarTarefas.php");
}elseif ($funcionalidade == "avaliation"){
    $idTarefa = $_POST["idTarefa"];
    enviarParaAvalicao($conexao, $idTarefa);
    header("Location: ../view/principalColaborador.php");
}
