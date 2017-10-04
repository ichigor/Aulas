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
?>

    <h1>HISTORICO TAREFAS</h1>
<?php $template->templateF(); ?>