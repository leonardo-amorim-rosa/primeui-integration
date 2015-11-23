<?php 
	
	/*
		Conexão através da API PDO
	*/

	class Conexao {

		public static function getConnection() {
			
			$conn = null;
			$dsn = 'mysql:host=localhost;dbname=estoque';
			$user = 'root';
			$password = '';

			try {
			    $conn = new PDO($dsn, $user, $password);

			    /*
			    	Setando o modo de manipulação de exceções.
			    	
			    	PDO::ERRMODE_EXCEPTION
					
					Além de armazenar o código de erro, este tipo de manipulação de erro irá lançar uma exceção PDOException, 
					esta alternativa é recomendada, 
					principalmente por deixar o código mais limpo e legível.			    
			    */
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
			    echo $e->getMessage();
			}

			return $conn;
		}
	}
?>