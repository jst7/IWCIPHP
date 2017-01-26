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
				<form action="<?php echo base_url();?>index.php/Backoffice/subir" method="post" enctype="multipart/form-data">
				<!--El name del campo tiene que ser si o si "userfile"-->
				    Subir Cancion: <input type="file" name="userfile" value="fichero"/>
				    <input type="submit" value="Enviar"/>
				</form>
				<?php
				if(isset($error)){
				    echo "<strong style='color:red;'>".$error."</strong>";
				}
				 
				if(isset($img)){
				    echo "<strong style='color:green;'>".$img["orig_name"]." subido satisfactoriamente </strong>";
				}
				?>
		</div>

	</main>

	<?php
		$this->load->view('inc/piebo');
	 ?>