<?php

	session_start();
	if($_SESSION['usuarioInvalido'] == 1){
		echo "<div class='msg'>O campo Usuário deve ser preechido!!!</div>";
		$_SESSION['usuarioInvalido'] = 0;
	}
	if($_SESSION['senhaInvalida'] == 1){
		echo "<div class='msg'>O campo Senha deve ser preechido!!!</div>";
		$_SESSION['senhaInvalida'] = 0;
	}
	if($_SESSION['camposNull'] == 1){
		echo "<div class='msg'>Todos os campos devem ser preenchidos!!!</div>";
		$_SESSION['camposNull'] = 0;
	}
	
	if($_SESSION['logado'] == 1){
		header('Location: inicio.php');
	}else{
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Meu Site</title>
	<meta charset='utf-8'>
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
				<input type='submit' value='Entrar' id='button'/>
			</form>
		</div>
	</section>
	<footer></footer>
</body>
</html>
";	
	}
	
?>