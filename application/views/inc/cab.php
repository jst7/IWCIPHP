<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo($titulo); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/estilo.css">

</head>
<body>

	<!-- Cabecera del sitio -->
	<header>
		<h1><?php echo($tituloH1); ?></h1>
		<?php
		$this->load->view('inc/menu');
	 	?>
	</header>