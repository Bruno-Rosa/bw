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

//verificaId();

function exercicio() {
	$id = $_GET['id'];
	$pdo = conectar();
	
	$busca = $pdo->prepare('select * from aluno, exercicio, aluno_has_exercicio
							where :id = aluno_has_exercicio.aluno_id
							and exercicio.id = aluno_has_exercicio.exercicio_id');
	$busca->bindValue(':id', $id, PDO::PARAM_INT);
	$busca->execute();
	$linha = $busca->fetchAll(PDO::FETCH_ASSOC);
	return $linha;
}
?>