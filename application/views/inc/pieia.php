	<!-- Pie de pagina -->
	<footer class="container centered fixed" >
		<nav class="navbar navbar-inverse">
			<div class="col-xs-12">
				<ul class="nav navbar-nav"><!--Aqui los controles de audio-->
					<li><?php echo(anchor('inapp/listasusuario', 'Listas de Reproduccion', 'title="volver al Inicio"')); ?></li>
					<li><?php echo(anchor('inapp/cancionesusuario', 'Canciones', 'title="ir al Registro de la web"')); ?></li>
					<li><?php echo(anchor('inapp/artistasusuario', 'Artistas', 'title="ir a la informacion de esta página"')); ?></li>
				</ul>
			</div>
		</nav>
	</footer>

</body>
</html>