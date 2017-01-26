<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

	<div class="col-xs-12">
	<div id="BuscadorCanciones" class="hide">
		<div class="row">
			<div class="col-xs-8">
				Usa el Buscador superior
			</div>	
			<div class="col-xs-4">
				<a class="glyphicon glyphicon-arrow-up"></a>
			</div>
		</div>
	
	</div>
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
				<a onclick="remarcar()" class="btn btn-success tile"> Buscador</a>
			</div>			
		</div>
		
	</div>


	</main>

	<?php
		$this->load->view('inc/pieia');
	 ?>

<script type="text/javascript">
	function remarcar(){
		var buscador = document.getElementById("BuscadorCanciones");
		buscador.className="alert alert-info"
	}

</script>