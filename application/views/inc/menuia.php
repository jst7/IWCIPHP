		<!-- Menu principal -->
		<nav class="navbar navbar-inverse">
			<div class="col-xs-12">
				<ul class="nav navbar-nav">
					<div class="navbar-header">
					    <?php echo(anchor('inapp/index', 'Spotify', array('class' => 'navbar-brand'))); ?>
					</div>
					<li><?php echo(anchor('inapp/listasusuario', 'Listas de Reproduccion', 'title="volver al Inicio"')); ?></li>
					<li><?php echo(anchor('inapp/cancionesusuario', 'Canciones', 'title="ir a las canciones"')); ?></li>
					<li><?php echo(anchor('inapp/artistasusuario', 'Artistas', 'title="ir a los artistas"')); ?></li>
					<li><?php echo(anchor('home/logout', 'Cerrar Sesión', array('class' => 'botonMenu'))); ?></li>
					<li>				
						<form class="navbar-form navbar-left" action="<?php echo base_url();?>index.php/inapp/buscar" method="POST" name="f1" id="f1" role="form">
					      <div class="input-group">
					        <input type="text" name="termino" class="form-control" placeholder="Titulo Canción">
					        <div class="input-group-btn">
					          <button class="btn btn-default" type="submit">
					            <i>Buscar</i>
					          </button>
					        </div>
					      </div>
					    </form>
					</li>
					<li>
						<?php echo(anchor('', 'Usuario: '. $this->session->userdata('usuario'), 'title="usuario logeado"')); ?>
					</li>
				</ul>
			</div>
		</nav>