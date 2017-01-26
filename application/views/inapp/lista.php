<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

<h2>Cola reproducción</h2>

<table class="table table-hover tablas">
    <tr>
    	<th class="Titulotabla-Canciones col-xs-1">id</th>
        <th class="Titulotabla-Canciones col-xs-11">Nombre</th>
        <th class="Titulotabla-Canciones col-xs-11">Escuchar</th>
    </tr>

    <?php
    	for ($i = 0; $i < count($canciones); ++$i) {
    ?>
    		<tr>
    			<td>
    	    		<?php
	    				echo $canciones[$i]['id']; 
	    			?>  								
    			</td>
    			<td>   
		    		<?php
		    			echo $canciones[$i]['nombre']; 
		    		?>    					
    			</td>
    			<td>   
		    		<?php
		    			echo(anchor("inapp/cambiarcancion/".$canciones[$i]['id'], ' ', array('class' => 'btn btn-primary glyphicon glyphicon-play')));
		    		?>    					
    			</td>
    		</tr>
    <?php
    	}
    ?>

</table>



	</main>

	<?php
		$this->load->view('inc/pieia');
	 ?>