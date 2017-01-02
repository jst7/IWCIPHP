		<!-- Menu principal -->
		<nav class="navbar navbar-default">
			<div class="col-xs-10">
				<ul class="nav navbar-nav">
					<li><?php echo(anchor('backoffice/index', 'Usuarios', 'title="volver al Inicio"')); ?></li>
					<li><?php echo(anchor('backoffice/canciones', 'Canciones', 'title="ir al Registro de la web"')); ?></li>
					<li><?php echo(anchor('backoffice/artistas', 'Artistas', 'title="ir a la informacion de esta página"')); ?></li>
				</ul>
			</div>

			<div class="col-xs-2">
				<?php echo(anchor('home/index', 'Cerrar Sesión', array('class' => 'btn btn-danger navbar-btn right'))); ?>
			</div>

			
		</nav>