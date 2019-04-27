<?php

Class Usuario
{
	private $pdo;
	public $msgErro = "";//tudo ok

	//Conexao mysql
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	//login professor
	public function logar($dscProfessor, $senhaProfessor)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT idProfessor FROM tbdprofessor WHERE dscProfessor = :d AND senhaProfessor = :s");
		$sql->bindValue(":d",$dscProfessor);
		$sql->bindValue(":s",$senhaProfessor);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['idProfessor'] = $dado['idProfessor'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}

	//cadastro categoria
	public function cadastrar_categoria($categoria)
	{
		global $pdo;
		//verificar se já existe o nome cadastrado
		$sql = $pdo->prepare("SELECT idCategoria FROM tbdcategoria WHERE dscCategoria = :d");
		$sql->bindValue(":d", $categoria);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO tbdcategoria(dscCategoria) VALUES(:d)");
			$sql->bindValue(":d",$categoria);
			$sql->execute();
			return true; //tudo ok
		}
	}
}


?>