<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="col-xs-12 centered">
		<h1>Login</h1>
		<form action="respuesta/<script.php" method="POST" name="f1" id="f1" role="form">
			<div class="row">
		    	<div class= "col-xs-6">
		        	<!--email-->
		        	<div class="form-group">
		            <label class="form-label" for="Email"> Email: </label> 
		            <input class="form-control" type="text" name="Email" id="Email" required size="25" maxlength="200" placeholder="Email" />
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class= "col-xs-6">
		        	<!--password-->
		        	<div class="form-group">
		            <label class="form-label" for="Password"> Contraseña: </label> 
		            <input class="form-control" type="password" name="Password" id="Password" required size="25" maxlength="200" placeholder="Contraseña" />
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class= "col-xs-6">
		        	<!--Recordar-->
		        	<div class="form-group">
		            <input type="checkbox" name="Recordar" value="Bike"> Recordar
		            </div>
		        </div>
		    </div>		    
		    <div class="row">
        		<div class="col-xs-2">
        			<a class="btn btn-primary" href="./Hola.html" value="Enviar" id="btnEnviar"> Enviar </a>
        		</div>
        		<div class="col-xs-2">
        			<?php echo(anchor('home/registro', 'Registrarse', 'title="ir al Registro"')); ?>
        		</div>
        		<div class="col-xs-5">
        			<?php echo(anchor('home/reccontrasena', 'Olvidó la Contraseña', 'title="ir a recuperar la contraseña"')); ?>
        		</div>
        	</div>
        
		</form>
		</div>
