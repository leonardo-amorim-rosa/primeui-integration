<?php 
	require_once("../layout/master-page-header.php");
	require_once("../../repository/entidades/Cliente.php");
	require_once("../../repository/Conexao.php");
	require_once("../../repository/DAO/ClienteDAO.php");

	$cliente = new Cliente;
	if (isset($_GET["id"])) {
		$clienteDAO = new ClienteDAO(Conexao::getConnection());
		$cliente = $clienteDAO->getById($_GET["id"]);
	}
?>	
	<br />

	<div id="pnlCadastroCliente" title="Cadastro de clientes">
		<form id="formCliente" class="form" action="adiciona-cliente.php" method="post">
			<input type="hidden" id="txtId" name="txtId" value="<?=$cliente->getId()?>" />
			Nome: <input id="txtNome" name="txtNome" type="text" value="<?=$cliente->getNome()?>" />
			Idade: <input id="txtIdade" name="txtIdade" type="number" value="<?=$cliente->getIdade()?>" />
			<buttom id="btnSalvar" onclick="submit();">Salvar</buttom>
		</form>
	</div>
		

	<script type="text/javascript" src="../../resources/custom/clientes.js"></script>

<?php require_once "../layout/master-page-footer.php" ?>