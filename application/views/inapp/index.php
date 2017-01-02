<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

	<div class="col-xs-12">
		<div class="col-xs-6">
			<div class="row">
				<a class="btn btn-danger tile"> Canciones</a>
			</div>
			<div class="row">
				<a class="btn btn-warning tile"> Listas</a>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="row">
				<a class="btn btn-primary tile"> Artistas</a>
			</div>
			<div class="row">
				<a class="btn btn-success tile"> Buscador</a>
			</div>			
		</div>
		
	</div>


	</main>

	<?php
		$this->load->view('inc/pieia');
	 ?>

