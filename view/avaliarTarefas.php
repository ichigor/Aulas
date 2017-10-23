<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 03/10/2017
 * Time: 15:32
 */

require_once "../Controller/templateController.php";
$template = new templateController();
$template->template();
require_once "../DAO/tarefaDAO.php";
?>

    <h1>Avaliar Tarefas</h1>
    <div class="box">

        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>
                    <th>Concluida</th>
                    <th>Não concluida</th>

                </tr>
                <?php
                $tarefas = listaTarefas($conexao);
                foreach ($tarefas as $tarefa) :
                    ?>

                    <tr>
                        <td><?= $tarefa['nomeTarefa'] ?></td>
                        <td>
                            <form class="" action="../Controller/tarefaController.php" method="post">
                                <input type="hidden" name="idTarefa" value="<?=$tarefa['idTarefa']?>">
                                <input type="hidden" name="funcionalidade" value="completed">
                                <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                            </form>
                        </td>
                        <td>
                            <form class="" action="../Controller/tarefaController.php" method="post">
                                <input type="hidden" name="idTarefa" value="<?=$tarefa['idTarefa']?>">
                                <input type="hidden" name="funcionalidade" value="incomplete">
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