<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
        require_once('header.php');
		require_once('func_main.php');
		title('Cadastro de intrutor');
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
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inpSenha">Senha</label>
                        <input type="password" class="form-control" id="inpSenha" name="inpSenha" placeholder="********">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inpSenhaConf">Confirmar senha</label>
                        <input type="password" class="form-control" id="inpSenhaConf" name="inpSenhaConf" placeholder="********">
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