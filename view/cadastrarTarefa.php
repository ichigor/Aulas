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
?>

    <div class="col-md-12">
        <h1>Cadastrar Tarefa</h1>
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title" style="color: #0b93d5"><strong>*Todos os campos são de preenchimento obrigatório</strong></h3>
            </div>
            <br><br>
            <!-- /.box-header -->
            <!-- form start  ALTERAR PARA ENVIAR PARA O CONTROLLER-->
            <form class="form-horizontal" action="../DAO/membroDAO.php" method="POST">
                <div class="box-body">
                    <div class="form-group ">
                        <label for="nomeTarefa" class="col-sm-2 control-label">Nome Tarefa</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="nomeTarefa" placeholder="Nome da Tarefa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Frequencia</label>
                        <div class="col-sm-2">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Diariamente</option>
                                <option>Mensalmente</option>
                                <option>Eventualmente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Designado</label>
                        <div class="col-sm-2">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Colaborador0</option>
                                <option>Colaborador1</option>
                                <option>Colaborador2</option>
                                <option>Colaborador3</option>
                                <option>Colaborador4</option>
                                <option>Colaborador5</option>
                                <option>Colaborador6</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Data Inicial:</label>
                        <div class="col-sm-2">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Data Limite:</label>
                        <div class="col-sm-2">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descrição</label>
                        <div class="col-sm-5">
                        <textarea class="form-control" rows="8" placeholder="Digite a descrição do que precisa ser realizado"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-success pull-right">Cadastrar</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
<?php $template->templateF(); ?>