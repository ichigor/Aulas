<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 03/10/2017
 * Time: 15:31
 */

require_once "../Controller/templateController.php";
$template = new templateController();
$template->template();
require_once "../DAO/tarefaDAO.php";
?>

    <h1>Lista de Tarefas</h1>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tarefas cadastradas no sistema</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>
                    <th>Alterar</th>
                    <th>Cancelar</th>
                </tr>
                <?php
                $tarefas = listaTarefas($conexao);
                foreach ($tarefas as $tarefa) :
                    ?>

                    <tr>
                        <td><?= $tarefa['nomeTarefa'] ?></td>
                        <td>
                            <form class="" action="alterarTarefa.php" method="post">
                                <input type="hidden" name="idTarefa" value="<?=$tarefa['idTarefa']?>">
                                <input type="hidden" name="funcionalidade" value="update">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></button>
                            </form>
                        </td>
                        <td>
                            <form class="" action="../Controller/tarefaController.php" method="post">
                                <input type="hidden" name="idTarefa" value="<?=$tarefa['idTarefa']?>">
                                <input type="hidden" name="funcionalidade" value="delete">
                                <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            </form>
                        </td>
                    </tr>

                    <?php
                endforeach
                ?>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
<?php $template->templateF(); ?>