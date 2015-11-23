<!DOCTYPE html>
<html>
	<head>
		<title>PrimeUI and Bootstrap 3 with PHP</title>

		<!-- Prime UI 2.1 CSS development And Theme -->
	    <link rel="stylesheet" href="../../resources/primeui-2.1/themes/afterdark/theme.css" />
	    <link rel="stylesheet" href="../../resources/primeui-2.1/development/primeui-2.1.css" />
	    
	    <!-- Font awesome -->
	    <link rel="stylesheet" type="text/css" href="../../resources/font-awesome-4.4.0/css/font-awesome.css" />
	    
	    <!-- JQuery 1.11.3 CSS -->
	    <link rel="stylesheet" href="../../resources/jquery-ui-1.11.1.custom/jquery-ui.min.css" />

	    <!-- JQuery 1.11.3 -->
	    <script type="text/javascript" src="../../resources/jquery-1.11.3/jquery-1.11.3.min.js"></script>

	    <!-- JQuery UI 1.11.1 -->
	    <script type="text/javascript" src="../../resources/jquery-ui-1.11.1.custom/jquery-ui.min.js"></script>

		<!-- Prime UI 2.1 JS development -->
	    <script type="text/javascript" src="../../resources/primeui-2.1/development/primeui-2.1.js"></script>

	    <!-- Bootstrap 3.3.4 -->
		<link rel="stylesheet" href="../../resources/bootstrap-3.3.4-dist/css/bootstrap.min.css" />
	    <script type="text/javascript" src="../../resources/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

	    <!-- Custom JS para configurar os compomentes do PrimeUI -->
	    <script type="text/javascript" src="../../resources/custom/master-page.js"></script>
	</head>
	<body>
		<div class="container">

			<ul id="menuPrincipal">
				
				<li>
					<a href="/primeui-integration/index.php">Home</a>
				</li>
				
				<li>
					<a href="#">Cadastros</a>
					<ul>
						<li>
							<a href="#">Clientes</a>
							<ul>
								<li><a href="/primeui-integration/pages/clientes/cadastro.php">Cadastro</a></li>
								<li><a href="/primeui-integration/pages/clientes/index.php">Lista</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Exemplos</a>
					<ul>
						<li><a href="/primeui-integration/pages/exemplos/datatable.php">DataTable</a></li>
						<li><a href="/primeui-integration/pages/exemplos/panel.php">Panel</a></li>
					</ul>
				</li>

			</ul>