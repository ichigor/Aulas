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

    <h1>HISTORICO TAREFAS</h1>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Striped Full Width Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>

                </tr>
                <?php
                $tarefas = listaTarefas($conexao);
                foreach ($tarefas as $tarefa) :
                    ?>

                    <tr>
                        <td><?= $tarefa['nomeTarefa'] ?></td>

                    </tr>

                    <?php
                endforeach
                ?>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
<?php $template->templateF(); ?>