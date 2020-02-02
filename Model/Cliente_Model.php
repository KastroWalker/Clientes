<?php 
	class Cliente_Model {
		private $id;
		private $nome;
		private $email;
		private $cpf;
		private $endereco;
		private $numero_endero;
		private $bairro;
		private $cidade;
		private $cep;
		private $estado;

		function __construct(){
			$this->id = 0;
			$this->nome = '';
			$this->email = '';
			$this->cpf = '';
			$this->endereco = '';
			$this->numero_endereco = '';
			$this->bairro = '';
			$this->cidade = '';
			$this->cep = '';
			$this->estado = '';
		}

		function getId(){
			return $this->id;
		}
		function setId($id){
			$this->id = $id;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getEmail(){
			return $this->email;
		}
		function setEmail($email){
			$this->email = $email;
		}

		function getCpf(){
			return $this->cpf;
		}
		function setCpf($cpf){
			$this->cpf = $cpf;
		}

		function getEndereco(){
			return $this->endereco;
		}
		function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		function getNumeroEndereco(){
			return $this->numero_endero;
		}
		function setNumeroEndereco($numero_endero){
			$this->numero_endero = $numero_endero;
		}

		function getBairro(){
			return $this->bairro;
		}
		function setBairro($bairro){
			$this->bairro = $bairro;
		}

		function getCidade(){
			return $this->cidade;
		}
		function setCidade($cidade){
			$this->cidade = $cidade;
		}

		function getCep(){
			return $this->cep;
		}
		function setCep($cep){
			$this->cep = $cep;
		}

		function getEstado(){
			return $this->estado;
		}
		function setEstado($estado){
			$this->estado = $estado;
		}
	}
?>