
		<?php
		require_once('func_main.php');
        ?>

        	<form action="" method="post">
            	<div class="form-group">
                    <label for="inpNome">Nome</label>
                    <input type="text" class="form-control" id="inpNome" name="inpNome" value="<?php echo getValueInstrutor('nome')?>">
                </div>
                <h4 class="page-header">Contato</h4>
                <div class="form-group">
                    <label for="inpEmail">E-mail</label>
                    <input type="email" class="form-control" id="inpEmail" name="inpEmail" value="<?php echo getValueInstrutor('email')?>">
                </div>
                <div class="form-group">
                    <label for="inpTel">Telefone</label>
                    <input type="text" class="form-control" id="inpTel" name="inpTel" value="<?php echo getValueInstrutor('telefone')?>">
                </div>
                <div class="form-group">
                    <label for="inpCel">Celular</label>
                    <input type="text" class="form-control" id="inpCel" name="inpCel" value="<?php echo getValueInstrutor('celular')?>">
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary col-md-2 col-md-offset-5" id="btnCadastrar" name="btnCadastrar" value="Cadastrar">
                </div>
            </form>