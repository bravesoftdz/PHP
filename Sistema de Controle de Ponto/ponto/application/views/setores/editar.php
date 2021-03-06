			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar cadastro de setor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php
            if(isset($_SESSION['msg'])) {
	            echo ' 
	            <div class="alert '.$_SESSION['msg']['cod'].' alert-dismissable">
	            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                '.$_SESSION['msg']['msg'].'
	            </div>
	            ';
	            $_SESSION['msg'] = null;
            }
            ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="cadsetores" name="cadsetores" action="<?php echo URL; ?>setores/updSetor" method="post">
                                        <div class="form-group">
                                        <?php
                                    	foreach ($setores as $setor) {
										?>
                                        	<label for="id">Id</label>
                                        	<p class="form-control-static"><?php echo $setor->id;?></p><br />
                                            <input id="id" name="id" type="hidden" value="<?php echo $setor->id;?>">
                                            <label for="descricao">Descri&ccedil;&atilde;o</label>
                                            <input id="descricao" name="descricao" class="form-control" value="<?php echo $setor->descricao;?>">
                                            <p class="help-block">Descri&ccedil;&atilde;o do setor.</p>
                                            <label for="codinteg">C&oacute;digo de integra&ccedil;&atilde;o</label>
                                            <input id="codinteg" name="codinteg" class="form-control" value="<?php echo $setor->codinteg;?>">
                                            <p class="help-block">C&oacute;digo para integra&ccedil;&atilde;o com o sistema de RH.</p>
                                        <?php
                                    	}
										?>
                                        </div>
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->