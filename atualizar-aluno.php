
		<?php
		require_once('func_main.php');
        ?>

        	<form action="" method="post">
            	<div class="form-group">
                    <label for="inpNome">Nome</label>
                    <input type="text" class="form-control" id="inpNome" name="inpNome" value="<?php echo getValueAluno('nome')?>">
                </div>
                <h4 class="page-header">Contato</h4>
                <div class="form-group">
                    <label for="inpEmail">E-mail</label>
                    <input type="email" class="form-control" id="inpEmail" name="inpEmail" value="<?php echo getValueAluno('email')?>">
                </div>
                <div class="form-group">
                    <label for="inpTel">Telefone</label>
                    <input type="text" class="form-control" id="inpTel" name="inpTel" value="<?php echo getValueAluno('telefone')?>">
                </div>
                <div class="form-group">
                    <label for="inpCel">Celular</label>
                    <input type="text" class="form-control" id="inpCel" name="inpCel" value="<?php echo getValueAluno('celular')?>">
                </div>
                <h4 class="page-header">Endereço</h4>
                <div class="form-group">
                    <label for="inpCep">Cep</label>
                    <input type="text" class="form-control" id="inpCep" name="inpCep" value="<?php echo getValueAluno('cep')?>">
                </div>
                <div class="form-group">
                    <label for="inpRua">Rua</label>
                    <input type="text" class="form-control" id="inpRua" name="inpRua" value="<?php echo getValueAluno('rua')?>">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inpBairro">Bairro</label>
                        <input type="text" class="form-control" id="inpBairro" name="inpBairro" value="<?php echo getValueAluno('bairro')?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inpCidade">Cidade</label>
                        <input type="text" class="form-control" id="inpCidade" name="inpCidade" value="<?php echo getValueAluno('cidade')?>">
                    </div>
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary col-md-2 col-md-offset-5" id="btnCAtualizaAtualizar" name="btnAtualizar" value="Atualizar">
                </div>
            </form>