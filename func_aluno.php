<?php
require_once('conexao.php');

function verificaId() {
	if(!isset($_GET['id'])){
		redirect('index.php',0);
		exit;
	}
	$id = $_GET['id'];
	$pdo = conectar();
	
	$busca = $pdo->prepare('select * from aluno where id = :id');
	$busca->bindValue(':id', $id, PDO::PARAM_INT);
	$busca->execute();
	if($busca->rowCount() == 0){
		redirect('index.php',0);
		exit;
	}
}
verificaId();
function getValueAluno($value) {
	
	$id = $_GET['id'];
	$pdo = conectar();
	
	$busca = $pdo->prepare('select * from aluno where id = :id');
	$busca->bindValue(':id', $id, PDO::PARAM_INT);
	$busca->execute();
	$linha = $busca->fetch(PDO::FETCH_ASSOC);
	return $linha[$value];
}
?>