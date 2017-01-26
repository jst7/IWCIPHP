<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo($titulo); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/estilo.css">
	<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>

</head>
<body>

	<!-- Cabecera del sitio -->
	<header class="container centered">
		<h1><?php echo($tituloH1); ?></h1>
		<?php
		$this->load->view('inc/menuia');
	 	?>
	</header>