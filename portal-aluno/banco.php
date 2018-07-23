<?php
	class Banco{
		private $conexao;
		
		public function setConexao($conexao){
			$this->conexao = $conexao;
		}
		public function getConexao(){
			return $this->conexao;
		}
		
		public function conectar(){
			$this->setConexao($con = new mysqli("localhost","root","","cmet"));
		}
		
		public function inserir($insert){
			$this->conectar();
			mysqli_query($this->getConexao(),$insert) or exit ("Erro ao incluir!");
		}
		public function selecionar($select){
			$this->conectar();
			$sql = mysqli_query($this->getConexao(),$select) or exit ("Erro ao selecionar!");
			return $sql;
		}
		public function atualizar($update){
			$this->conectar();
			mysqli_query($this->getConexao(),$update) or exit ("Erro ao atualizar!");
		}
		public function deletar($delete){
			$this->conectar();
			mysqli_query($this->getConexao(),$delete) or exit ("Erro ao excluir!");
		}
	}
?>