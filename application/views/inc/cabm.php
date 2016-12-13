<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mantenimiento</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/estilo.css">


<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

	<!-- Cabecera del sitio -->
	<header>
		<h1>Mantenimiento</h1>
		<?php
		$this->load->view('inc/menu');
	 	?>
	</header>