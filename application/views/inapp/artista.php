<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<?php
		$this->load->view('inc/cabia');
	 ?>
	
	<!-- Contenido principal -->
	<main class="container">
	<style>
	div.pagination {
	display: inline-block;
	float: right;
	margin: 15px 0;
	padding: 0;
}
div.pagination a {
	color: black;
	float: left;
	padding: 8px 16px;
	text-decoration: none;
}
div.pagination a {
	color: black;
	float: left;
	padding: 8px 16px;
	text-decoration: none;
}
div.pagination a.active {
	background-color: #3378B4;
	color: white;
}
div.pagination a:hover:not(.active) {
	background-color: #ddd;
}
</style>


<div class="well well-lg">
	<h2 align="center"><?php echo $artista[0]['nombre'] ?></h2>	
	<h3 align="center"><?php echo $artista[0]['descripcion'] ?></h3>	
	<h3 align="center"><?php echo $artista[0]['web'] ?></h3>	
	<div class="row">
		<h4 align="center">
		<div class="col-xs-6">
			<?php echo $artista[0]['genero'] ?>
		</div>
		<div class="col-xs-6">
			<?php echo $artista[0]['lanzamiento'] ?>
		</div>
		</h4>
	</div>
</div>
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
		    			echo(anchor("inapp/cambiarcancionartista/".$artista[0]['id'].'/'.$canciones[$i]['id'], ' ', array('class' => 'btn btn-primary glyphicon glyphicon-play')));
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
