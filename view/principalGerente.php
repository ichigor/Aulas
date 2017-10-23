<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 26/09/2017
 * Time: 15:00
 */


require_once "../Controller/templateController.php";

$template = new templateController();

$template ->template();

require_once "../DAO/tarefaDAO.php";
?>

<h1>Tarefas para o dia de Hoje</h1>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Status</th>
                <th>Responsavel</th>

            </tr>
            <?php
            $tarefas = listaTarefas($conexao);
            foreach ($tarefas as $tarefa) :
                ?>

                <tr>
                    <td><?= $tarefa['nomeTarefa'] ?></td>
                    <td><?= $tarefa['status'] ?></td>
                    <td>
                        <a href="dadosMembro.php?idUsuario=24 ">Colaborador 1</a>
                    </td>
                </tr>

                <?php
            endforeach
            ?>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<?php
$template->templateF();
?>
