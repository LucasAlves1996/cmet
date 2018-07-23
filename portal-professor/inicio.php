<?php

	session_start();
	if($_SESSION['logado'] == 1){
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Meu Site</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' type='text/css' href='style.css'/>
</head>
<body>
	<h1>Seja bem vindo!!!</h1>
	<br/><br/>
	<form method='POST' action='sair.php'>
		<input type='submit' value='Sair' />
	</form>
</body>
</html>
";
	}else{
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Meu Site</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' type='text/css' href='style.css'/>
</head>
<body>
	Você não está logado!!! <a href='index.php'> Faça login aqui.</a>
</body>
</html>
";
	}
	
?>