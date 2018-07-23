<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario != "" && $senha != ""){
		session_start();
		$_SESSION['logado'] = 1;
		header('Location: inicio.php');
	}else if($usuario == "" & $senha != ""){
		session_start();
		$_SESSION['usuarioInvalido'] = 1;
		header('Location: index.php');
	}else if($senha == "" & $usuario != ""){
		session_start();
		$_SESSION['senhaInvalida'] = 1;
		header('Location: index.php');
	}else if($usuario == "" & $senha == ""){
		session_start();
		$_SESSION['camposNull'] = 1;
		header('Location: index.php');
	}

?>