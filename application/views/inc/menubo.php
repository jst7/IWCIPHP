		<!-- Menu principal -->
		<nav class="navbar navbar-default">
			<div class="col-xs-10">
				<ul class="nav navbar-nav">
					<li><?php echo(anchor('backoffice/index', 'Usuarios', 'title="volver al Inicio"')); ?></li>
					<li><?php echo(anchor('backoffice/canciones', 'Canciones', 'title="ir a las canciones"')); ?></li>
					<li><?php echo(anchor('backoffice/artistas', 'Artistas', 'title="ir a lo artistas"')); ?></li>
					<li><?php echo(anchor('backoffice/album', 'Album', 'title="ir a los albums"')); ?></li>
					<li><?php echo(anchor('home/logout', 'Cerrar Sesión', array('class' => 'botonMenu'))); ?></li>
				</ul>
			</div>
			
		</nav>