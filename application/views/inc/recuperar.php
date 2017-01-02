<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-xs-12 centered">
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
        		<div class="col-xs-2">
        			<a class="btn btn-primary" href="./Hola.html" value="Enviar" id="btnEnviar"> Enviar </a>
        		</div>
        	</div>  
		</form>
		</div>
