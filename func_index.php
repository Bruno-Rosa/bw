<?php
require_once('conexao.php');
function listaAluno() {
	$pdo = conectar();
	
	$busca = $pdo->prepare('select * from aluno');
	$busca->execute();
	
	if($busca->rowCount() > 0){
		return $busca->fetchAll(PDO::FETCH_ASSOC);
	}
}

function listaInstrutor() {
	$pdo = conectar();
	
	$busca = $pdo->prepare('select * from instrutor');
	$busca->execute();
	
	if($busca->rowCount() > 0){
		return $busca->fetchAll(PDO::FETCH_ASSOC);
	}
}


?>