<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

<h2 align="center"><?php echo $tituloH1 ?></h2>
<table class="table table-hover tablas">
    <tr>
        <th class="Titulotabla-Canciones">Nombre</th>
    </tr>
    <?php

	  while($fila=mysqli_fetch_array($canciones)) {		
            echo("<tr>");
            echo('<td onclick="saludo()">'. $fila['nombre'] . '</td>');
            echo("</tr>");
        }

    ?>
</table>

	</main>

	<?php
		$this->load->view('inc/pie');
	 ?>

	 <script type="text/javascript">
		 function saludo(){
			 alert("jejej")
		 }
	 </script>