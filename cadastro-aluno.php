<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
        require_once('header.php');
		require_once('func_main.php');
		title('Cadastro de aluno');
        ?>
    </head>
    <body>
    	<?php
        require_once('menu.php');
		?>
        <div class="container">
        	<form action="" method="post">
            	<div class="form-group">
                    <label for="inpNome">Nome</label>
                    <input type="text" class="form-control" id="inpNome" name="inpNome" placeholder="Ex. Jailson Mendes">
                </div>
                <h4 class="page-header">Contato</h4>
                <div class="form-group">
                    <label for="inpEmail">E-mail</label>
                    <input type="email" class="form-control" id="inpEmail" name="inpEmail" placeholder="Ex. jailson@email.com">
                </div>
                <div class="form-group">
                    <label for="inpTel">Telefone</label>
                    <input type="text" class="form-control" id="inpTel" name="inpTel" placeholder="(11) 1331-1341">
                </div>
                <div class="form-group">
                    <label for="inpCel">Celular</label>
                    <input type="text" class="form-control" id="inpCel" name="inpCel" placeholder="(11) 91331-1341">
                </div>
                <h4 class="page-header">Endereço</h4>
                <div class="form-group">
                    <label for="inpCep">Cep</label>
                    <input type="text" class="form-control" id="inpCep" name="inpCep" placeholder="11187-543">
                </div>
                <div class="form-group">
                    <label for="inpRua">Rua</label>
                    <input type="text" class="form-control" id="inpRua" name="inpRua" placeholder="Ex. Nome da rua">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inpBairro">Bairro</label>
                        <input type="text" class="form-control" id="inpBairro" name="inpBairro" placeholder="Ex. Nome da bairro">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inpCidade">Cidade</label>
                        <input type="text" class="form-control" id="inpCidade" name="inpCidade" placeholder="Ex. Nome da cidade">
                    </div>
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary col-md-2 col-md-offset-5" id="btnCadastrar" name="btnCadastrar" value="Cadastrar">
                </div>
            </form>
        </div>
        <?php
        require_once('footer.php');
        ?>
    </body>
</html>