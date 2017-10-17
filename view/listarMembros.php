<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 03/10/2017
 * Time: 15:30
 */

require_once "../Controller/templateController.php";
$template = new templateController();
$template->template();
require_once "../DAO/membroDAO.php";
?>

    <h1>Lista de Membros</h1>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">*Dados de todos os membros ativos no sistema</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>

                    <th>Alterar</th>
                    <th>Inativar</th>
                </tr>
    <?php
        $membros = listaMembrosAtivos($conexao);
        foreach ($membros as $membro) :
    ?>

                <tr>
                    <td><?= $membro['nome'] ?></td>

                    <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>"><span class="glyphicon glyphicon-refresh"></a></td>
                    <td>
                        <form class="" action="../Controller/membroController.php" method="post">
                            <input type="hidden" name="idUsuario" value="<?=$membro['idUsuario']?>">
                            <input type="hidden" name="funcionalidade" value="delete">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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