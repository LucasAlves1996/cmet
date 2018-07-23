<?php

	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($nome != "" & $usuario != "" & $senha != ""){
		include "aluno.php";
		$aluno = new LoginAluno();
		$aluno->criarNovoLogin($nome, $usuario, $senha);
	}else if($nome == "" & $usuario != "" & $senha != ""){
		session_start();
		$_SESSION['nomeNull'] = 1;
		header('Location: cadastro.php');
	}else if($nome != "" & $usuario == "" & $senha != ""){
		session_start();
		$_SESSION['usuarioNull'] = 1;
		header('Location: cadastro.php');
	}else if($nome != "" & $usuario != "" & $senha == ""){
		session_start();
		$_SESSION['senhaNull'] = 1;
		header('Location: cadastro.php');
	}else{
		session_start();
		$_SESSION['camposNull'] = 1;
		header('Location: cadastro.php');
	}

?>