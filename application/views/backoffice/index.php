<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabm');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">
		<h1>Usuarios</h1>
		<div><?php echo $output; ?></div>

	</main>

	<?php
		$this->load->view('inc/pie');
	 ?>