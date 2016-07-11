<?php
session_start();

function menuActive($active){
	$paginaLink = basename($_SERVER["SCRIPT_NAME"]);
	if($paginaLink == $active){
		return 'class="active"';
	}
}

function title($str = null){
	$buffer = ob_get_contents();
	ob_end_clean();
	if($str == null){
		$str = 'Bem-vindo';
	}else{
		$buffer = str_replace('%TITLE%', $str,$buffer);
	}
	echo $buffer;
}

function requireFuunction(){
	$paginaLink = basename($_SERVER["SCRIPT_NAME"]);
	
	if($paginaLink == 'index.php'){
		require_once('func_index.php');
	}else
	if($paginaLink == 'atualizar-aluno.php'){
		require_once('func_aluno.php');
	}else
	if($paginaLink == 'atualizar-instrutor.php'){
		require_once('func_instrutor.php');
	}else
	if($paginaLink == 'ficha.php'){
		require_once('func_ficha.php');
	}
}

function redirect($redirect, $time){
	$pagina = basename($_SERVER["SCRIPT_NAME"]);
	if($redirect != $pagina){
		echo '<script language= "JavaScript">
				setTimeout(function () {
				   window.location.href = "'.$redirect.'";
				}, '.$time.');
			  </script>';
	}
}

requireFuunction();

?>