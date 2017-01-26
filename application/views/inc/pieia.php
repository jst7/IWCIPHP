	<!-- Pie de pagina -->
	<footer class="container centered fixed" >
		<nav class="navbar navbar-inverse">
			<div class="col-xs-12">
				<ul class="nav navbar-nav"><!--Aqui los controles de audio-->
					<li><?php echo(anchor('home/logout', ' ', array('class' => 'glyphicon glyphicon-fast-backward'))); ?></li>
					<li><?php echo(anchor('home/logout', ' ', array('class' => 'glyphicon glyphicon-play'))); ?></li>
					<li><?php echo(anchor('home/logout', ' ', array('class' => 'glyphicon glyphicon-fast-forward'))); ?></li>
				</ul>
			</div>
		</nav>
	</footer>

</body>
</html>