﻿<?php

	session_start();
	if($_SESSION['logado'] == 1){
		echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Portal do Aluno</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width'>
	<link rel='icon' href='/cmet/favicon.ico'/>
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
	    header('Location: index.php');
	}
	
?>