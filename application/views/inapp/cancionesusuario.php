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
<h2 align="center"><?php //echo $tituloH1 ?></h2>
<table class="table table-hover tablas">
    <tr>
        <th class="Titulotabla-Canciones">Nombre</th>
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

	<?php
		$this->load->view('inc/pie');
	 ?>
