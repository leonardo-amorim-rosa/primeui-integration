<?php 
	require_once("../../repository/entidades/Cliente.php");

	class ClienteDAO {

		private $conn;

		function __construct(PDO $conn) {
			$this->conn = $conn;
		}

		public function insert(Cliente $cliente) {

			$this->conn->beginTransaction();

			try {
				$statement = $this->conn->prepare('
					INSERT INTO clientes (nome, idade) VALUES (:nome, :idade)
				');

				$statement->bindValue(":nome", $cliente->getNome());
				$statement->bindValue(":idade", $cliente->getIdade());
				$statement->execute();

				$this->conn->commit();

			} catch (Exception $e) {
				echo $e->getMessage();
				$this->conn->rollback();
			}
		}

		public function update(Cliente $cliente) {

			$this->conn->beginTransaction();

			try {
				$statement = $this->conn->prepare('
					UPDATE clientes SET nome = :nome, idade = :idade WHERE id = :id
				');

				$statement->bindValue(":nome", $cliente->getNome());
				$statement->bindValue(":idade", $cliente->getIdade());
				$statement->bindValue(":id", $cliente->getId());
				$statement->execute();

				$this->conn->commit();

			} catch (Exception $e) {
				echo $e->getMessage();
				$this->conn->rollback();
			}
		}

		public function getById($id) {
			$statement = $this->conn->prepare(
				' 
					SELECT * FROM clientes WHERE id = :id
				'
			);

			$statement->bindValue(":id", $id);
			$statement->execute();

			return $this->processOneResult($statement);
		}

		public function getAll() {
			$statement = $this->conn->query(
				' 
					SELECT * FROM clientes
				'
			);

			return $this->processResultList($statement);
		}

		private function processOneResult($statement) {
			$cliente = null;

			if ($statement) {
				if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
					$cliente = new Cliente;

					$cliente->setId($row->id);
					$cliente->setNome($row->nome);
					$cliente->setIdade($row->idade);
				}
			}

			return $cliente;
		}

		private function processResultList($statement) {
			$results = array();

			if ($statement) {
				while ($row = $statement->fetch(PDO::FETCH_OBJ)) {
					$cliente = new Cliente;

					$cliente->setId($row->id);
					$cliente->setNome($row->nome);
					$cliente->setIdade($row->idade);

					$results[] = $cliente;
				}
			}

			return $results;
		}
	}

?>