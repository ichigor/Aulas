<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 10/10/2017
 * Time: 14:05
 */

require_once("../util/conecta.php");




//insereTarefa($conexao, $nomeTarefa, $frequencia, $descricao, $dataInicial, $dataLimite, $designado);
//listaTarefas($conexao);
//cancelarTarefa($conexao, 3);


//verificar problema na data xD
function insereTarefa($conexao, $nomeTarefa, $frequencia, $descricao,  $dataInicial, $dataLimite, $designado){
    $query="insert into tarefa (nomeTarefa, status, frequencia, descricao, dataInicial, dataFinal, idUsuario) values
            ('{$nomeTarefa}','Em andamento','{$frequencia}','{$descricao}','{$dataInicial}', '{$dataLimite}',10)";
    return mysqli_query($conexao, $query);
}


function listaTarefas($conexao)
{
    $tarefas = array();
    $resultado = mysqli_query($conexao, "select * from tarefa");
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        array_push($tarefas, $tarefa);
    }
    return $tarefas;
}

function cancelarTarefa($conexao, $idTarefa){
    $query = "update tarefa set status='Cancelada' where idTarefa ='{$idTarefa}'";
    return mysqli_query($conexao, $query);
}