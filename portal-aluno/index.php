<?php

	session_start();
	if($_SESSION['usuarioInvalido'] == 1){
		echo "<div class='msg'>Nome de usuário inválido!</div>";
		$_SESSION['usuarioInvalido'] = 0;
	}
	if($_SESSION['senhaInvalida'] == 1){
		echo "<div class='msg'>Senha inválida!</div>";
		$_SESSION['senhaInvalida'] = 0;
	}
	if($_SESSION['usuarioNull'] == 1){
		echo "<div class='msg'>O campo Usuário deve ser preechido!</div>";
		$_SESSION['usuarioNull'] = 0;
	}
	if($_SESSION['senhaNull'] == 1){
		echo "<div class='msg'>O campo Senha deve ser preechido!</div>";
		$_SESSION['senhaNull'] = 0;
	}
	if($_SESSION['camposNull'] == 1){
		echo "<div class='msg'>Todos os campos devem ser preenchidos!</div>";
		$_SESSION['camposNull'] = 0;
	}
	
	$_SESSION['usuarioInvalido'] = 0;
	$_SESSION['senhaInvalida'] = 0;
	$_SESSION['usuarioNull'] = 0;
	$_SESSION['senhaNull'] = 0;
	$_SESSION['camposNull'] = 0;
	
	if($_SESSION['logado'] == 1){
		header('Location: inicio.php');
	}else{
		$_SESSION['logado'] = 0;
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Login</title>
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
			<h1>Login</h1>
			<form method='POST' action='entrar.php'>
				Usuário<br/>
				<input type='text' name='usuario' placeholder=' Usuário'/><br/>
				Senha<br/>
				<input type='password' name='senha' placeholder=' Senha'/><br/>
				<input type='submit' value='Entrar' id='button'/><br/><br/>
				<h2>Ainda não tem cadastro no nosso site? Cadastre-se <a href='cadastro.php'>aqui</a> e tenha acesso ao portal do aluno.</h2>
			</form>
		</div>
	</section>
	<footer></footer>
</body>
</html>
";	
	}
	
?>