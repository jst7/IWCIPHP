<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-xs-12 centered">
<div class="<?php echo $clasemensaje ?>">
	<?php echo $mensaje ?>
</div>
		<form action="<?php echo base_url();?>index.php/Home/recuperar" method="POST" name="f1" id="f1" role="form">
			<div class="row">
		    	<div class= "col-xs-6">
		        	<!--email-->
		        	<div class="form-group">
		            <label class="form-label" for="email"> Email: </label> 
		            <input class="form-control" type="text" name="email" id="email" required size="25" maxlength="200" placeholder="Email" />
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
