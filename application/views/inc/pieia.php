	<!-- Pie de pagina -->
	<footer class="container centered fixed" >
		<nav class="navbar navbar-inverse">
			<div class="col-xs-12">
				<ul class="nav navbar-nav"><!--Aqui los controles de audio-->
					<li><?php echo(anchor('', ' ', array('class' => 'glyphicon glyphicon-play'))); ?></li>
	    			<li><?php echo(anchor('', $cancion[0]['nombre'], array('class' => ''))); ?></li>
	    			<li><?php echo(anchor('', 'reproducciones:'. $cancion[0]['reproducciones'], array('class' => ''))); ?></li>
	    			<li><?php echo(anchor('', 'duracion: ' . $cancion[0]['duracion'] . ' minutos', array('class' => ''))); ?></li>
	    			<li><?php echo(anchor('', 'Album: ' . $cancion[0]['album'], array('class' => ''))); ?></li>
	    			<li><?php echo(anchor('', 'Artista: ' . $cancion[0]['artista'], array('class' => ''))); ?></li>
				</ul>
			</div>
		</nav>
	</footer>

</body>
</html>