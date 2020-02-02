<?php 
	include '../Model/Cliente_Model.php';
	include '../DB/Conexao.php';

	class Cliente_Control {
		private $data;
		private $connection;

		function __construct(){
			$this->data = new Cliente_Model();
			$this->connection = new Conexao();
		}

		function create($nome, $email, $cpf, $endereco, $numero_endereco, $bairro, $cidade, $cep, $estado){
			$this->data->setNome($nome);
			$this->data->setEmail($email);
			$this->data->setCpf($cpf);
			$this->data->setEndereco($endereco);
			$this->data->setNumeroEndereco($numero_endereco);
			$this->data->setBairro($bairro);
			$this->data->setCidade($cidade);
			$this->data->setCep($cep);
			$this->data->setEstado($estado);

			$sql = "INSERT INTO cliente ('nome', 'endereco', 'numero', 'bairro', 'cidade', 'uf', 'cep', 'email', 'cpf') VALUES (:nome, :endero, :numero, :bairro, :cidade, :uf, :cep, :email, :cpf);";

			$d = $this->connection->connect();

			$data = $d->prepare($sql);
			$data->bindValue(":nome", $this->getNome());
			$data->bindValue(":endereco", $this->getEndereco());
			$data->bindValue(":numero", $this->getNumero());
			$data->bindValue(":bairro", $this->getBairro());
			$data->bindValue(":cidade", $this->getCidade());
			$data->bindValue(":uf", $this->getUf());
			$data->bindValue(":cep", $this->getCep());
			$data->bindValue(":email", $this->getEmail());
			$data->bindValue(":cpf", $this->getCpf());

			try {
				$data->execute();
			} catch (PDOException $ex) {
				echo "Erro ao cadastrar: ".$ex->getMessage();
			}
		}
		
		function read($id){
			$this->data->setId($id);

			$sql = "SELECT FROM * cliente WHERE id = :id";

	        $d = $this->connection->connect();
	        $data = $d->prepare($sql);
	        $data->bindValue(":id", $this->data->getId());
	        try {
		        $data->execute();
		        return $data;
	        } catch (Exception $e) {
	        	echo "Erro ao Carregar: ".$ex->getMessage(); 
	        }
		}
		
		function update($id, $nome, $email, $cpf, $endereco, $numero_endereco, $bairro, $cidade, $cep, $estado){
			$this->data->setId($id);
			$this->data->setNome($nome);
			$this->data->setEmail($email);
			$this->data->setCpf($cpf);
			$this->data->setEndereco($endereco);
			$this->data->setNumeroEndereco($numero_endereco);
			$this->data->setBairro($bairro);
			$this->data->setCidade($cidade);
			$this->data->setCep($cep);
			$this->data->setEstado($estado);

			$sql = "UPDATE usuario SET id = :id, nome = :nome, email = :email, cpf = :cpf, endereco = :endereco, numero_endereco = :numero_endereco, bairro = :bairro, cidade = :cidade, cep = :cep, estado = cep";

			$d = $this->connection->connect();

			$data = $d->prepare($sql);
			$data->bindValue(":nome", $this->getNome());
			$data->bindValue(":endereco", $this->getEndereco());
			$data->bindValue(":numero", $this->getNumero());
			$data->bindValue(":bairro", $this->getBairro());
			$data->bindValue(":cidade", $this->getCidade());
			$data->bindValue(":uf", $this->getUf());
			$data->bindValue(":cep", $this->getCep());
			$data->bindValue(":email", $this->getEmail());
			$data->bindValue(":cpf", $this->getCpf());

			try {
				$data->execute();
			} catch (PDOException $ex) {
				echo "Erro ao editar: ".$ex->getMessage();
			}
		}
		
		function delete($id){
			$this->data->setId($id);

			$sql = "DELETE FROM cliente WHERE id = id";
	        $d = $this->connection->connect();

	        $data = $d->prepare($sql);
	        $data->bindValue(":id", $this->data->getId());

	        try {
	            $data->execute();
	        } catch (PDOException $ex) {
	            echo "Erro ao apagar: " . $ex->getMessage();
	        }
	    }
	}
?>