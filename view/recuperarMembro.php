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

    <h1>Recuperar Membro</h1>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">*Membros desativados no sistema</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th>Nome</th>

                    <th>Recuperar</th>
                </tr>
                <?php
                $membros = listaMembrosDesativados($conexao);
                foreach ($membros as $membro) :
                    ?>

                    <tr>
                        <td><?= $membro['nome'] ?></td>
                        <td>
                            <form class="" action="../Controller/membroController.php" method="post">
                                <input type="hidden" name="idUsuario" value="<?=$membro['idUsuario']?>">
                                <input type="hidden" name="funcionalidade" value="active">
                                <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
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