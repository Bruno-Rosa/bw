<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
        require_once('header.php');
		require_once('func_main.php');
		title('Bem-vindo');
        ?>
    </head>
    <body>
        <div class="container">
        	<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">Aluno</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">Instrutor</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<div class="panel panel-default panel-table">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col col-xs-6">
                                        	<h3 class="panel-title">Painel de aluno</h3>
                                        </div>
                                        <div class="col col-xs-6 text-right">
                                        	<a href="cadastrar-aluno.php" class="btn btn-sm btn-primary btn-create">Cadastrar aluno</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>
                                                <th class="hidden-xs"><span class="glyphicon glyphicon-cog" aria-hidden="true"></th>
                                                <th class="hidden-xs">ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                        	<?php
											$aluno = listaAluno();
                                            foreach ($aluno as $value){
											?>
                                            <tr>
                                                <td align="center" class="hidden-xs" style="min-width:150px">
                                                    <button onclick="$('#atu-aluno').load('atualizar-aluno.php?id=<?php echo $value['id']?>')" data-toggle="modal" data-target="#aluno" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                                    <a class="btn btn-danger" onClick="deleta(<?php echo $value['id']?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                    <div class="dropdown" style="display:inline-block">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a href="ver_ficha.php?id=<?php echo $value['id']?>">Ver ficha</a></li>
                                                            <li><a href="#">outra coisa</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><?php echo $value['id']?></td>
                                                <td><?php echo $value['nome']?></td>
                                                <td><?php echo $value['email']?></td>
                                            </tr>
                                            <?php
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col col-xs-4">Page 1 of 5</div>
                                        <div class="col col-xs-8">
                                            <ul class="pagination hidden-xs pull-right">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                            <ul class="pagination visible-xs pull-right">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        	</div>
						</div>
						<div class="tab-pane" id="tab_default_2">
							<div class="panel panel-default panel-table">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col col-xs-6">
                                        	<h3 class="panel-title">Painel de instrutor</h3>
                                        </div>
                                        <div class="col col-xs-6 text-right">
                                        	<a href="cadastrar-intrutor.php" class="btn btn-sm btn-primary btn-create">Cadastrar instrutor</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>
                                                <th class="hidden-xs"><span class="glyphicon glyphicon-cog" aria-hidden="true"></th>
                                                <th class="hidden-xs">ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            <?php
											$instrutor = listaInstrutor();
                                            foreach ($instrutor as $value){
											?>
                                            <tr>
                                                <td align="center" class="hidden-xs" style="min-width:150px">
                                                    <button onclick="$('#atu-instrutor').load('atualizar-instrutor.php?id=<?php echo $value['id']?>')" data-toggle="modal" data-target="#instrutor" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                                    <a class="btn btn-danger" onClick="deleta(<?php echo $value['id']?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                </td>
                                                <td class="hidden-xs"><?php echo $value['id']?></td>
                                                <td><?php echo $value['nome']?></td>
                                                <td><?php echo $value['usuario']?></td>
                                            </tr>
                                            <?php
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col col-xs-4">Page 1 of 5</div>
                                        <div class="col col-xs-8">
                                            <ul class="pagination hidden-xs pull-right">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                            <ul class="pagination visible-xs pull-right">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        	</div>
						</div>
					</div>
				</div>
			</div>


            <!-- Modal -->
            <div class="modal fade" id="aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar dados do aluno</h4>
                  </div>
                  <div class="modal-body" id="atu-aluno">
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar dados do instrutor</h4>
                  </div>
                  <div class="modal-body" id="atu-instrutor">
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
        <?php
        require_once('footer.php');
        ?>
    </body>
</html>