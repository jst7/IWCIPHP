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
        <th class="Titulotabla-Canciones">id</th>
        <th class="Titulotabla-Canciones">Nombre</th>
        <th class="Titulotabla-Canciones">Canciones</th>
    </tr>

    <?php
    	for ($i = 0; $i < count($artistas); ++$i) {
    ?>
    		<tr> 
    			<td>
	    			<?php
	    				echo $artistas[$i]['id']; 
	    			?>
    			</td>
    			<td>
	    			<?php
	    				echo $artistas[$i]['nombre']; 
	    			?>
    			</td>
    			 <td>
	    			<?php
	    				echo(anchor('inapp/artista/'.$artistas[$i]['id'], ' ', array('class' => 'btn btn-warning glyphicon glyphicon-info-sign')));
	    			?>
    			</td>
    		</tr>
    <?php
    	}
    ?>

</table>
    <?php
    	echo $paginacion;
    ?>
	</main>

	<?php
		$this->load->view('inc/pieia');
	 ?>
