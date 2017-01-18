<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

<h2 align="center">Artistas</h2>
<table class="table table-hover tablas">
    <tr>
        <th class="Titulotabla-Artistas">Nombre</th>
    </tr>
    <?php

	  while($fila=mysqli_fetch_array($artistas)) {		
            echo("<tr>");
            echo('<td onclick="clickArtista('. $fila['id'] . ')">'. $fila['nombre'] . '</td>');
            echo("</tr>");
        }

    ?>
</table>
	</main>

	<script>
	function clickArtista(id){
		location.href="<?php echo base_url();?>index.php/Inapp/cancionesArtista/"+id;
	}
	</script>

	<?php
		$this->load->view('inc/pie');
	 ?>