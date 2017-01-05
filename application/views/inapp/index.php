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
				<?php echo(anchor('inapp/cancionesusuario', 'Canciones', array('class' => 'btn btn-danger tile'))); ?>
			</div>
			<div class="row">
				<?php echo(anchor('inapp/listasusuario', 'Listas', array('class' => 'btn btn-warning tile'))); ?>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="row">
				<?php echo(anchor('inapp/artistasusuario', 'Artistas', array('class' => 'btn btn-primary tile'))); ?>
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

