<?php 
	
	class Cliente {

		private $id;
		private $nome;
		private $idade;

		public function getId() {
			return $this->id;
		}

		public function setId($novoId) {
			$this->id = $novoId;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setNome($novoNome) {
			$this->nome = $novoNome;
		}

		public function getIdade() {
			return $this->idade;
		}

		public function setIdade($novaIdade) {
			$this->idade = $novaIdade;
		}

	}
?>