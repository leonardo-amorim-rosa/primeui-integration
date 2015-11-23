<?php 
	require_once("../../repository/entidades/Cliente.php");
	require_once("../../repository/Conexao.php");
	require_once("../../repository/DAO/ClienteDAO.php");

	$cliente = new Cliente;

	if (isset($_POST["txtId"])) {
		$cliente->setId($_POST["txtId"]);
	}

	if (isset($_POST["txtNome"])) {
		$cliente->setNome($_POST["txtNome"]);
	}

	if (isset($_POST["txtIdade"])) {
		$cliente->setIdade($_POST["txtIdade"]);
	}

	$clienteDAO = new ClienteDAO(Conexao::getConnection());

	if ($cliente->getId() == "") {
		$clienteDAO->insert($cliente);

	} else {
		$clienteDAO->update($cliente);
	}

	header("Location: index.php");
?>