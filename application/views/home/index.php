<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cab');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">
	<div class="<?php echo($mensaje); ?>">
		Error Inicio Sesion
	</div>
	<?php
		$this->load->view('inc/login');
	 ?>

	</main>

	<?php
		$this->load->view('inc/pie');
	 ?>

