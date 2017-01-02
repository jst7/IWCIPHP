		<!-- Menu principal -->
		<nav class="navbar navbar-inverse">
			<div class="col-xs-12">
				<ul class="nav navbar-nav">
					<div class="navbar-header">
					    <?php echo(anchor('inapp/index', 'Spotify', array('class' => 'navbar-brand'))); ?>
					</div>
					<li><?php echo(anchor('inapp/listasusuario', 'Listas de Reproduccion', 'title="volver al Inicio"')); ?></li>
					<li><?php echo(anchor('inapp/cancionesusuario', 'Canciones', 'title="ir al Registro de la web"')); ?></li>
					<li><?php echo(anchor('inapp/artistasusuario', 'Artistas', 'title="ir a la informacion de esta página"')); ?></li>
					<li><?php echo(anchor('home/index', 'Cerrar Sesión', array('class' => 'botonMenu'))); ?></li>
					<li>				
						<form class="navbar-form navbar-left">
					      <div class="input-group">
					        <input type="text" class="form-control" placeholder="Search">
					        <div class="input-group-btn">
					          <button class="btn btn-default" type="submit">
					            <i>Buscar</i>
					          </button>
					        </div>
					      </div>
					    </form>
					</li>
				</ul>
			</div>
		</nav>