<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="col-xs-12 centered">
		<h1>Login</h1>
		<form action="<?php echo base_url();?>index.php/Home/loginp" method="POST" name="f1" id="f1" role="form">
			<div class="row">
		    	<div class= "col-xs-6">
		        	<!--email-->
		        	<div class="form-group">
		            <label class="form-label" for="Email"> Email: </label> 
		            <input class="form-control" type="text" name="email" id="Email" required size="25" maxlength="200" placeholder="Email" />
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class= "col-xs-6">
		        	<!--password-->
		        	<div class="form-group">
		            <label class="form-label" for="Password"> Contraseña: </label> 
		            <input class="form-control" type="password" name="password" id="Password" required size="25" maxlength="200" placeholder="Contraseña" />
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
        			<input class="btn btn-primary" type="submit" value="Enviar" id="btnEnviar"> 
        		</div>
        	</div>
        
		</form>
		</div>
