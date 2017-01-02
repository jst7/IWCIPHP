<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>BackOffice</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap.min.css">


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
	<header class="container centered">
		<h1>Gestión</h1>
		<?php $this->load->view('inc/menubo');?>
	</header>

	