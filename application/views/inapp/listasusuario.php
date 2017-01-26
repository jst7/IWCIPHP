<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">

<h2> Listas de: <?php echo $usuario; ?></h2>

<table class="table table-hover tablas">
    <tr>
    	<th class="Titulotabla-Canciones col-xs-1">id</th>
        <th class="Titulotabla-Canciones col-xs-11">Nombre</th>
        <th class="Titulotabla-Canciones col-xs-11">ir</th>
    </tr>

    <?php
    	for ($i = 0; $i < count($listas); ++$i) {
    ?>
    		<tr>
    			<td>
    	    		<?php
	    				echo $listas[$i]['id']; 
	    			?>  								
    			</td>
    			<td>   
		    		<?php
		    			echo $listas[$i]['nombre']; 
		    		?>    					
    			</td>
    			<td>   
		    		<?php
		    			echo(anchor("inapp/lista/".$listas[$i]['id'], ' ', array('class' => 'btn btn-primary glyphicon glyphicon-info-sign')));
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