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
	
	<!-- Contenido principal -->
	<main class="container">

<h2 align="center">CANCIONES</h2>
<table class="table table-hover tablas">
    <tr>
        <th class="Titulotabla-Artistas">Resultados: </th>
    </tr>
<?php
    	for ($i = 0; $i < count($canciones); ++$i) {
    ?>
    		<tr> 
    			<td>
    			<?php
    				echo $canciones[$i]['nombre']; 
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

	<script>
	function clickArtista(id){
		location.href="<?php echo base_url();?>index.php/Inapp/cancionesArtista/"+id;
	}
	</script>

	<?php
		$this->load->view('inc/pieia');
	 ?>