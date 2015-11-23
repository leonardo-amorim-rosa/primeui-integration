<?php 
	require_once("../../repository/Conexao.php");
	require_once("../../repository/DAO/ClienteDAO.php");

	$clienteDAO = new ClienteDAO(Conexao::getConnection());

	$clientesJson = array();
	$resultado = $clienteDAO->getAll();

	foreach ($resultado as $cliente) {
		$clientesJson[] = array("id" => $cliente->getId(), "nome" => $cliente->getNome(), "idade" => $cliente->getIdade());
	}

	header('Content-type: text/javascript');
	echo json_encode($clientesJson);
?>