<?php

Class Aluno
{
	private $pdo;
	public $msgErro = "";//tudo ok

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

	public function cadastrar($raAluno, $nomeAluno, $senhaAluno)
	{
		global $pdo;
		//verificar se já existe o nome cadastrado
		$sql = $pdo->prepare("SELECT idAluno FROM tbdaluno WHERE nomeAluno = :e");
		$sql->bindValue(":e",$nomeAluno);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO tbdaluno(raAluno, nomeAluno, senhaAluno) VALUES(:ra, :e, :s)");
			$sql->bindValue(":ra",$raAluno);
			$sql->bindValue(":e",$nomeAluno);
			$sql->bindValue(":s",md5($senhaAluno));
			$sql->execute();
			return true; //tudo ok
		}
	}


	public function logar($raAluno, $senhaAluno)
	{
		global $pdo;
		//verificar se o nome e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT idAluno FROM tbdaluno WHERE raAluno = :ra AND senhaAluno = :s");
		$sql->bindValue(":ra",$raAluno);
		$sql->bindValue(":s",md5($senhaAluno));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['idAluno'] = $dado['idAluno'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}
}







?>