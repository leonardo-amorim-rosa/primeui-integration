<?php 
	
	$clientes = array();
	$clientes[] = array("id" => 1, "nome" => "leo1", "idade" => 12);
	$clientes[] = array("id" => 2, "nome" => "leo34", "idade" => 43);
	$clientes[] = array("id" => 3, "nome" => "teste", "idade" => 23);
	$clientes[] = array("id" => 4, "nome" => "teste", "idade" => 45);

	header('Content-type: text/javascript');
	echo json_encode($clientes);
	
 ?>