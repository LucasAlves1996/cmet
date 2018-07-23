<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario != "" && $senha != ""){
		include "aluno.php";
		$login = new LoginAluno();
		$login->fazerLogin($usuario, $senha);
	}else if($usuario == "" & $senha != ""){
		session_start();
		$_SESSION['usuarioNull'] = 1;
		header('Location: index.php');
	}else if($senha == "" & $usuario != ""){
		session_start();
		$_SESSION['senhaNull'] = 1;
		header('Location: index.php');
	}else if($usuario == "" & $senha == ""){
		session_start();
		$_SESSION['camposNull'] = 1;
		header('Location: index.php');
	}

?>