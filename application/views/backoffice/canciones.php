<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabbo');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">
		<h1>Canciones</h1>
		<div class="row">
			<div><?php echo $output; ?></div>
		</div>
		<div class="row">
			<form action="respuesta/<script.php" method="POST" name="f1" id="f1" role="form">
				<div class="row">
			    	<div class= "col-xs-6">
			        	<div class="form-group">
			            <label class="form-label" for="song"> Cancion: </label> 
			            <input class="form-control" type="file" name="song" id="song" required size="25" maxlength="200" placeholder="Cancion" />
			            </div>
			        </div>
			    </div>
			    <div class="row">
	        		<div class="col-xs-2">
	        			<a class="btn btn-primary" type="submit" value="Enviar" id="btnEnviar"> Enviar </a>
	        		</div>
	        	</div>  
			</form>
		</div>

	</main>

	<?php
		$this->load->view('inc/piebo');
	 ?>