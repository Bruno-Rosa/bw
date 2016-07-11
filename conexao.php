<?php
function conectar(){
	$host = "localhost:3306";
	$banco = "academiabw";
	$usuario = "root";
	$senha = "";
	
	try{
		$pdo = new PDO("mysql:host=".$host.";dbname=".$banco,$usuario,$senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	return $pdo;
}
?>