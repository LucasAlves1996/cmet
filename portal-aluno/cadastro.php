<?php

	session_start();
	if($_SESSION['nomeNull'] == 1){
		echo "<div class='msg'>O campo Nome completo deve ser preechido!</div>";
		$_SESSION['nomeInvalido'] = 0;
	}
	if($_SESSION['usuarioNull'] == 1){
		echo "<div class='msg'>O campo Usuário deve ser preechido!</div>";
		$_SESSION['usuarioInvalido'] = 0;
	}
	if($_SESSION['senhaNull'] == 1){
		echo "<div class='msg'>O campo Senha deve ser preechido!</div>";
		$_SESSION['senhaInvalida'] = 0;
	}
	if($_SESSION['camposNull'] == 1){
		echo "<div class='msg'>Todos os campos devem ser preenchidos!</div>";
		$_SESSION['camposNull'] = 0;
	}
	if($_SESSION['usuarioRepetido'] == 1){
		echo "<div class='msg'>Esse nome de usuário já existe! Tente outro nome.</div>";
		$_SESSION['usuarioRepetido'] = 0;
	}
	
	$_SESSION['nomeNull'] = 0;
	$_SESSION['usuarioNull'] = 0;
	$_SESSION['senhaNull'] = 0;
	$_SESSION['camposNull'] = 0;
	$_SESSION['usuarioRepetido'] = 0;
	
	if($_SESSION['logado'] == 1){
		header('Location: inicio.php');
	}else{
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Cadastro</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width'>
	<link rel='icon' href='/cmet/favicon.ico'/>
	<link rel='stylesheet' type='text/css' href='style.css'/>
</head>
<body>
	<header></header>
	<nav></nav>
	<section>
		<div id='form'>
			<h1>Cadastro de usuário</h1>
			<form method='POST' action='cadastrar.php'>
			Nome completo:
			<input type='text' name='nome' placeholder='Digite seu nome completo...'/><br/>
			Usuário:
			<input type='text' name='usuario' placeholder='Digite o nome de usuário desejado...'/><br/>
			Senha:
			<input type='password' name='senha' placeholder='Digite a senha desejada...'/><br/>
			<input type='submit' value='Cadastrar' id='button'/>
			</form>
		</div>
	</section>
	<footer></footer>
</body>
</html>
";	
	}
	
?>