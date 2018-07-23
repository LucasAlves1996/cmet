<?php
	include "banco.php";
	abstract class Aluno{
		private $nome;
		private $usuario;
		private $senha;
		
	}
	
	class LoginAluno extends Aluno{
		public function criarNovoLogin($nome, $usuario, $senha){
			$novoLogin = new Banco();
			$resultado = $novoLogin->selecionar("SELECT usuario FROM login WHERE usuario = '$usuario'");
			$res = mysqli_fetch_assoc($resultado);
			if($usuario == $res['usuario']){
				session_start();
				$_SESSION['usuarioRepetido'] = 1;
				header('Location: cadastro.php');
			}else{
				$novoLogin->inserir("INSERT INTO login(nome,usuario,senha) VALUES('$nome','$usuario','$senha')");
				session_start();
				$_SESSION['logado'] = 1;
				header('Location: inicio.php');
			}
		}
		
		public function fazerLogin($usuario, $senha){
			$logar = new Banco();
			$resultado = $logar->selecionar("SELECT usuario, senha FROM login WHERE usuario = '$usuario'");
			$res = mysqli_fetch_assoc($resultado);
			if($usuario == $res['usuario'] & $senha == $res['senha']){
				session_start();
				$_SESSION['logado'] = 1;
				header('Location: inicio.php');
			}else if($usuario != $res['usuario']){
				session_start();
				$_SESSION['usuarioInvalido'] = 1;
				header('Location: index.php');
			}else if($usuario == $res['usuario'] & $senha != $res['senha']){
				session_start();
				$_SESSION['senhaInvalida'] = 1;
				header('Location: index.php');
			}
		}
	}
?>